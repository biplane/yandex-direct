<?php

namespace Biplane\SysV;

/**
 * Предоставляет интерфейс для работы с общей памятью.
 *
 * @author Alexey Popkov
 * @author Denis Vasilev
 */
class SharedMemory
{
    const SHM_HASHKEYS_INDEX = 1;

    /**
     * @var int
     */
    private $key;

    /**
     * @var resource
     */
    private $handle;

    /**
     * @var int
     */
    private $memorySize;

    /**
     * @var int
     */
    private $permissions;

    /**
     * @var Semaphore
     */
    private $semaphore;

    /**
     * @var int
     */
    private $numberLocks;

    /**
     * Constructor.
     *
     * @param int       $key        The key
     * @param Semaphore $semaphore  A Semaphore instance
     * @param int       $memorySize The memory size of bytes
     * @param int       $permission The optional permission bits
     */
    public function __construct($key, Semaphore $semaphore, $memorySize = 10000, $permission = 0666)
    {
        $this->key = (int)$key;
        $this->semaphore = $semaphore;
        $this->memorySize = (int)$memorySize;
        $this->permissions = $permission;

        $this->numberLocks = 0;

        $this->attach();
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        if ($this->handle !== null) {
            $this->detach();
        }
    }

    /**
     * Creates or open a shared memory segment.
     *
     * @throws \LogicException   When a shared memory is already attached
     * @throws \RuntimeException When unable attach to shared memory
     */
    public function attach()
    {
        if (is_resource($this->handle)) {
            throw new \LogicException('Shared memory is already attached.');
        }

        if (!is_resource($this->handle = shm_attach($this->key, $this->memorySize, $this->permissions))) {
            throw new \RuntimeException('Unable attach to shared memory.');
        }

        $this->lock();

        if (!shm_has_var($this->handle, self::SHM_HASHKEYS_INDEX)) {
            shm_put_var($this->handle, self::SHM_HASHKEYS_INDEX, array());
        }

        $this->unlock();
    }

    /**
     * Disconnects from shared memory segment.
     *
     * @throws \LogicException When shared memory is not attached.
     *
     * @see checkHandler
     */
    public function detach()
    {
        $this->checkHandle();

        $this->unlock(true);
        shm_detach($this->handle);

        $this->handle = null;
        $this->numberLocks = 0;
    }

    /**
     * Gets all keys from attached shared memory.
     *
     * @return array An array of keys
     *
     * @throws \LogicException When shared memory is not attached
     *
     * @see checkHandler
     */
    public function keys()
    {
        $this->checkHandle();

        return array_keys($this->getHashKeys());
    }

    /**
     * Gets all variables from attached shared memory.
     *
     * @return array An array of variables
     *
     * @throws \LogicException When shared memory is not attached
     *
     * @see checkHandler
     * @see lock
     */
    public function all()
    {
        $this->checkHandle();
        $this->lock();

        $ret = array();

        foreach ($this->getHashKeys() as $key => $index) {
            $ret[$key] = shm_get_var($this->handle, $index);
        }

        $this->unlock();

        return $ret;
    }

    /**
     * Gets a variable by specified key.
     *
     * @param string $key The key of variable
     *
     * @return mixed|null A value of variable
     *
     * @throws \LogicException When shared memory is not attached
     *
     * @see checkHandler
     * @see lock
     */
    public function get($key)
    {
        $this->checkHandle();
        $this->lock();

        $value = null;
        $index = $this->getIndex($key);

        if ($index && shm_has_var($this->handle, $index)) {
            $value = shm_get_var($this->handle, $index);
        }

        $this->unlock();

        return $value;
    }

    /**
     * Determines, whether the key is contained in the shared memory.
     *
     * @param string $key The key of variable
     *
     * @return bool True if variable with the key is exist; otherwise false
     *
     * @throws \LogicException When shared memory is not attached
     *
     * @see checkHandler
     * @see lock
     */
    public function has($key)
    {
        $this->checkHandle();
        $this->lock();

        $hasVar = false;
        $index = $this->getIndex($key);

        if ($index) {
            $hasVar = shm_has_var($this->handle, $index);
        }

        $this->unlock();

        return $hasVar;
    }

    /**
     * Puts a variable to the shared memory.
     *
     * @param string $key   The key of variable
     * @param mixed  $value The value of variable
     *
     * @return SharedMemory
     *
     * @see checkHandler
     * @see lock
     */
    public function set($key, $value)
    {
        $this->checkHandle();
        $this->lock();

        if (false === $index = $this->getIndex($key)) {
            $keys = $this->getHashKeys();
            $keys[$key] = $index = count($keys) + 2;

            shm_put_var($this->handle, self::SHM_HASHKEYS_INDEX, $keys);
        }

        shm_put_var($this->handle, $index, $value);

        $this->unlock();

        return $this;
    }

    /**
     * Removes a variable from the shared memory be specified key.
     *
     * @param string $key The key of variable
     *
     * @return bool True if the variable with key has been removed, otherwise false
     *
     * @see checkHandler
     * @see lock
     */
    public function remove($key)
    {
        $this->checkHandle();
        $this->lock();

        $removed = false;

        if ($this->has($key)) {
            $removed = shm_remove_var($this->handle, $this->getIndex($key));

            if ($removed) {
                $keys = $this->getHashKeys();

                unset($keys[$key]);
                shm_put_var($this->handle, self::SHM_HASHKEYS_INDEX, $keys);
            }
        }

        $this->unlock();

        return $removed;
    }

    /**
     * Call user function in exclusive locking.
     *
     * @param callable $func A user function
     *
     * @return mixed
     */
    public function exclusively($func)
    {
        $this->lock();

        try {
            $result = call_user_func($func, $this);
        } catch (\Exception $ex) {
            $this->unlock();

            throw $ex;
        }

        $this->unlock();

        return $result;
    }

    /**
     * Gets an index of key in the shared memory.
     *
     * @param string $key The key of variable
     *
     * @return int|bool The index or false, if index by key not found
     *
     * @throws \RuntimeException
     */
    private function getIndex($key)
    {
        $keys = $this->getHashKeys();

        if (isset($keys[$key])) {
            return $keys[$key];
        }

        return false;
    }

    /**
     * Gets the hash of variable names and indexes.
     *
     * @return array
     *
     * @throws \RuntimeException
     */
    private function getHashKeys()
    {
        $keys = shm_get_var($this->handle, self::SHM_HASHKEYS_INDEX);

        if (!is_array($keys)) {
            throw new \RuntimeException('Could not get the internal hash-table of keys.');
        }

        return $keys;
    }

    /**
     * Acquires an exclusive lock for this shared memory.
     *
     * If the lock is already acquired then only increment counter of lockings.
     */
    private function lock()
    {
        if ($this->numberLocks === 0) {
            $this->semaphore->acquire();
        }

        $this->numberLocks++;
    }

    /**
     * Releases the lock.
     *
     * @param bool $semRelease If true then will be released the semaphore when counter of lockings equals 0
     */
    private function unlock($semRelease = false)
    {
        if ($this->numberLocks === 0) {
            return;
        }

        $this->numberLocks--;

        if ($this->numberLocks === 0 || $semRelease) {
            $this->semaphore->release();
        }
    }

    /**
     * Checks handle of the shared memory.
     *
     * @throws \LogicException When not attached to shared memory
     */
    private function checkHandle()
    {
        if ($this->handle === null) {
            throw new \LogicException('Shared Memory is not attached.');
        }
    }
}
