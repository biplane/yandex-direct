<?php

namespace Biplane\SysV;

/**
 * Provides factory for creating components of the System V IPC.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class Factory
{
    private $path;
    private $defaultMemorySize;

    /**
     * Constructor.
     *
     * @param string $path              The absolute path for the kyes
     * @param int    $defaultMemorySize The default memory size of bytes
     *
     * @throws \RuntimeException When $path does not exist
     */
    public function __construct($path, $defaultMemorySize = 10000)
    {
        if (!is_dir($path)) {
            if (@mkdir($path, 0777, true) === false) {
                throw new \RuntimeException(sprintf('Unable to create the %s directory.', $path));
            }
        } elseif (!is_writable($path)) {
            throw new \RuntimeException(sprintf('Unable to write in the %s directory.', $path));
        }

        $this->path = $path;
        $this->defaultMemorySize = (int)$defaultMemorySize;
    }

    /**
     * Creates a new semaphore.
     *
     * @param string $name     The named token for a System V IPC key
     * @param int    $acquires The number of processes that can acquire the semaphore simultaneously
     *
     * @return Semaphore A Semaphore instance
     *
     * @throws \InvalidArgumentException When $name is invalid
     *
     * @see assertValidName
     */
    public function createSemaphore($name, $acquires = 1)
    {
        $this->assertValidName($name);

        return new Semaphore($this->generateKey($name), $acquires);
    }

    /**
     * Creates a new shared memory.
     *
     * @param string         $name       The named token for a System V IPC key
     * @param Semaphore|null $semaphore  A Semaphore instance. If null then will be created a new semaphore
     * @param int|null       $memorySize The memory size of bytes
     *
     * @return SharedMemory A SharedMemory instance
     *
     * @throws \InvalidArgumentException When $name is invalid
     *
     * @see assertValidName
     */
    public function createSharedMemory($name, Semaphore $semaphore = null, $memorySize = null)
    {
        $this->assertValidName($name);

        if ($semaphore === null) {
            $semaphore = $this->createSemaphore($name);
        }

        return new SharedMemory($this->generateKey($name), $semaphore, $memorySize ?: $this->defaultMemorySize);
    }

    /**
     * Creates a new message queue.
     *
     * @param string $name The named token for a System V IPC key
     *
     * @return MessageQueue A MessageQueue instance
     */
    public function createMessageQueue($name)
    {
        $this->assertValidName($name);

        return new MessageQueue($this->generateKey($name));
    }

    /**
     * Generates the IPC key by named token.
     *
     * @param string $name The token
     *
     * @return int
     */
    private function generateKey($name)
    {
        $filename = $this->path . DIRECTORY_SEPARATOR . $name . '.ipc';

        if (!is_file($filename)) {
            touch($filename);
        }

        return Util::generateKey($filename);
    }

    /**
     * Checks that the named token is valid.
     *
     * @param string $name The token
     *
     * @throws \InvalidArgumentException When $name is invalid
     */
    private function assertValidName($name)
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException(sprintf(
                'Expected the name of type "string", "%s" given.',
                is_object($name) ? get_class($name) : gettype($name)
            ));
        } elseif (strlen($name) == 0) {
            throw new \InvalidArgumentException('Name cannot be empty.');
        }
    }
}
