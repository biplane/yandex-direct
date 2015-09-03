<?php

namespace Biplane\SysV;

/**
 * Limits the number of processes that can access a resource concurrently.
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class Semaphore
{
    /**
     * @var \resource
     */
    private $handle;

    /**
     * @var bool
     */
    private $locked;

    /**
     * Constructor.
     *
     * @param int $key      The key
     * @param int $acquires The number of processes that can acquire the semaphore simultaneously
     *
     * @throws \InvalidArgumentException When $acquires less than 1
     * @throws \RuntimeException         When unable to get semaphore
     */
    public function __construct($key, $acquires = 1)
    {
        $acquires = (int)$acquires;

        if ($acquires < 1) {
            throw new \InvalidArgumentException(sprintf('Number of acquires (%d) cannot be less than 1.', $acquires));
        }

        $this->handle = sem_get((int)$key, (int)$acquires);

        if (!is_resource($this->handle)) {
            throw new \RuntimeException(sprintf('Unable to get semaphore by key "%s".', $key));
        }

        $this->locked = false;
    }

    /**
     * Acquires a semaphore.
     *
     * Blocks the current process until the semaphore can be acquired.
     *
     * @throws \RuntimeException When unable to acquire lock
     * @throws \LogicException   When the semaphore has been removed
     */
    public function acquire()
    {
        if (!is_resource($this->handle)) {
            throw new \LogicException('Semaphore has been removed.');
        }

        // FIXME: Или выбрасывать исключение?
        if ($this->locked) {
            return;
        }

        if (!sem_acquire($this->handle)) {
            throw new \RuntimeException('Unable to acquire lock.');
        }

        $this->locked = true;
    }

    /**
     * Releases a semaphore.
     *
     * @throws \RuntimeException When unable to release lock
     * @throws \LogicException   When the semaphore has been removed
     * @throws \LogicException   When the semaphore was not acquired
     */
    public function release()
    {
        if (!is_resource($this->handle)) {
            throw new \LogicException('Semaphore has been removed.');
        }

        if (!$this->locked) {
            throw new \LogicException('Semaphore was not acquired.');
        }

        if (!sem_release($this->handle)) {
            throw new \RuntimeException('Unable to release lock.');
        }

        $this->locked = false;
    }

    /**
     * Removes a semaphore
     *
     * After removing the semaphore, it is no longer accessible.
     */
    public function remove()
    {
        if (is_resource($this->handle)) {
            sem_remove($this->handle);
            $this->handle = null;
        }
    }
}
