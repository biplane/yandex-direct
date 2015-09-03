<?php

namespace Biplane\Tests\SysV;

use Biplane\SysV\MessageQueue;
use Biplane\SysV\Util;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class MessageQueueTest extends TestCase
{
    /**
     * @var MessageQueue
     */
    private $queue;

    public static function tearDownAfterClass()
    {
        if (false !== strpos(PHP_OS, 'WIN')) {
            return;
        }

        $key = Util::generateKey();

        if (msg_queue_exists($key)) {
            $queue = new MessageQueue(Util::generateKey());
            $queue->destroy();
        }
    }

    public function testMessageShouldBeSent()
    {
        $this->assertEquals(0, $this->getQueueSize());

        $message = $this->queue->createMessage('foo');
        $this->queue->send($message);

        $this->assertEquals(1, $this->getQueueSize());
    }

    public function testMessageWithCustomTypeShouldBeSent()
    {
        $message = $this->queue->createMessage('message with custom type', 2);
        $this->queue->send($message);

        $this->assertEquals(2, $this->getQueueSize());
    }

    public function testMessageWithDefaultTypeShouldBeReceived()
    {
        $message = $this->queue->createMessage('foo');

        $this->assertEquals($message, $this->queue->receive(MessageQueue::MESSAGE_DEFAULT_TYPE, true, MSG_IPC_NOWAIT));
    }

    public function testMessageWithDefaultTypeShouldNotBeReceived()
    {
        $this->assertNull($this->queue->receive(MessageQueue::MESSAGE_DEFAULT_TYPE, true, MSG_IPC_NOWAIT));
    }

    public function testMessageWithCustomTypeShouldBeReceived()
    {
        $message = $this->queue->createMessage('message with custom type', 2);

        $this->assertEquals($message, $this->queue->receive(2, true, MSG_IPC_NOWAIT));
    }

    public function testThrowExceptionWhenMessageSizeIsTooBig()
    {
        $this->setExpectedException(
            '\RuntimeException',
            sprintf('Could not send the message to a message queue with key "%s" (error code: 22). Maybe the message size is too big.', Util::generateKey())
        );

        $data = str_repeat('nop', $this->queue->getQueueMaxSize() / 3);
        $message = $this->queue->createMessage($data);

        $this->queue->send($message);
    }

    /**
     * @expectedException \OverflowException
     */
    public function testThrowExceptionWhenQueueIsOverflowed()
    {
        $msgSize = $this->queue->getQueueMaxSize() / 20;
        $size = 0;

        while ($size < $this->queue->getQueueMaxSize()) {
            $message = $this->queue->createMessage(str_repeat('nop', $msgSize));
            $this->queue->send($message, true, false);

            $size += $msgSize;
        }
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExcpetionWhenUseClosedQueue()
    {
        $this->queue->destroy();
        $this->queue->getStat();
    }

    protected function setUp()
    {
        parent::setUp();

        $this->queue = new MessageQueue(Util::generateKey());
    }

    private function getQueueSize()
    {
        $stat = $this->queue->getStat();

        return $stat['msg_qnum'];
    }
}
