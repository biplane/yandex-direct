<?php

namespace Biplane\SysV;

/**
 * Wrapper for functions msg_*
 *
 * @author Denis Vasilev
 */
class MessageQueue
{
    const MESSAGE_DEFAULT_TYPE = 1;

    private $handle;
    private $key;
    private $closed;
    private $queueMaxSize;

    /**
     * Constructor.
     *
     * @param int $key A message queue numeric ID
     *
     * @throws \RuntimeException
     */
    public function __construct($key)
    {
        $this->key = $key;
        $this->handle = msg_get_queue((int)$key);

        if (!is_resource($this->handle)) {
            throw new \RuntimeException(sprintf('Could not get the message queue with key "%s".', $key));
        }

        $stat = $this->getStat();

        $this->closed = false;
        $this->queueMaxSize = $stat['msg_qbytes'];
    }

    /**
     * Gets the maximum number of bytes in one message queue.
     *
     * @return int The maximum number of bytes
     */
    public function getQueueMaxSize()
    {
        return $this->queueMaxSize;
    }

    /**
     * Creates a new message.
     *
     * @param mixed $data A message data
     * @param int   $type A message type
     *
     * @return Message A Message instance
     */
    public function createMessage($data, $type = self::MESSAGE_DEFAULT_TYPE)
    {
        return new Message($data, $type);
    }

    /**
     * Sends a message to a message queue.
     *
     * @param Message $message   A Message instance
     * @param bool    $serialize If true, $message will be serialized
     * @param bool    $blocking  If true, the process will be blocked until another process reads messages
     *                           from the queue and frees enough space for your message to be sent,
     *                           otherwise will be thrown OverflowException
     *
     * @throws \OverflowException When a message queue is overwoled
     * @throws \RuntimeException  When could not send a $message
     */
    public function send(Message $message, $serialize = true, $blocking = true)
    {
        $this->checkState();

        if (!@msg_send($this->handle, $message->getType(), $message->getData(), $serialize, $blocking, $errCode)) {
            if ($errCode === MSG_EAGAIN) {
                throw new \OverflowException(sprintf(
                    'Overflow a message queue with key "%s", not enough the space for a new message.', $this->key
                ));
            }

            $detail = null;

            if ($errCode === 22) {
                $detail = 'Maybe the message size is too big.';
            }

            throw new \RuntimeException(sprintf(
                'Could not send the message to a message queue with key "%s" (error code: %d). %s',
                $this->key, $errCode, $detail
            ));
        }
    }

    /**
     * Receives a message from a message queue.
     *
     * @param int  $desiredType The desired type
     * @param bool $unserialize If true, the message will be unserialized,
     *                          otherwise the message will be returned as a binary-safe string
     * @param int  $flags       The optional flags allows you to pass flags to the low-level msgrcv system call
     * @param int  $maxSize     The maximum size of message to be accepted
     *
     * @return Message A Message instance
     *
     * @throws \RuntimeException
     */
    public function receive($desiredType = self::MESSAGE_DEFAULT_TYPE, $unserialize = true, $flags = 0, $maxSize = null)
    {
        $this->checkState();

        $desiredType = (int)$desiredType;

        if ($maxSize === null) {
            $maxSize = $this->getQueueMaxSize();
        }

        if (!@msg_receive($this->handle, $desiredType, $type, $maxSize, $message, $unserialize, $flags, $errCode)) {
            if (($flags & MSG_IPC_NOWAIT) === MSG_IPC_NOWAIT && $errCode === MSG_ENOMSG) {
                return null;
            }

            throw new \RuntimeException(sprintf(
                'Could not receive a message from a message queue with key "%s" (error code: %d).',
                $this->key,
                $errCode
            ));
        }

        return $this->createMessage($message, $type);
    }

    /**
     * Gets information from the message queue data structure.
     *
     * @return array
     *
     * @link http://docs.php.net/manual/en/function.msg-stat-queue.php
     */
    public function getStat()
    {
        $this->checkState();

        return msg_stat_queue($this->handle);
    }

    /**
     * Destroys a message queue.
     *
     * @return bool True if the queue destroyed is successfull
     */
    public function destroy()
    {
        $this->checkState();

        if (msg_remove_queue($this->handle)) {
            $this->closed =  true;
        }

        return $this->closed;
    }

    /**
     * Checks that the queue is opened
     *
     * @throws \LogicException When the queue is closed
     */
    private function checkState()
    {
        if ($this->closed) {
            throw new \LogicException('Message queue is closed.');
        }
    }
}
