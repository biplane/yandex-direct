<?php

namespace Biplane\Tests\SysV;

use Biplane\SysV\Semaphore;
use Biplane\SysV\Util;

class SemaphoreTest extends TestCase
{
    /**
     * @var Semaphore
     */
    private $semaphore;

    protected function setUp()
    {
        parent::setUp();

        $this->semaphore = new Semaphore(Util::generateKey());
    }

    protected function tearDown()
    {
        if ($this->semaphore instanceof Semaphore) {
            $this->semaphore->remove();
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenNumberAcquiresLessThanOne()
    {
        new Semaphore(1, 0);
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExceptionWhenAcquireSemaphoreWhichHasBeenRemoved()
    {
        $this->semaphore->remove();

        $this->semaphore->acquire();
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Semaphore has been removed.
     */
    public function testThrowExceptionWhenReleaseSemaphoreWhichHasBeenRemoved()
    {
        $this->semaphore->remove();

        $this->semaphore->release();
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Semaphore was not acquired.
     */
    public function testThrowExceptionWhenReleaseSemaphoreBeforeAcquire()
    {
        $this->semaphore->release();
    }
}
