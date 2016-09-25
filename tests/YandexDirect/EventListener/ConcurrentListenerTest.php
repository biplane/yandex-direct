<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\ConcurrentListener;

class ConcurrentListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $semaphore;

    /**
     * @var ConcurrentListener
     */
    private $listener;

    public function testAcquireAndReleaseLocking()
    {
        $event = $this->getEventMock('profile_hash');

        $this->factory->expects($this->once())
            ->method('createSemaphore')
            ->with($this->equalTo('api_profile_hash'), $this->equalTo(10))
            ->willReturn($this->semaphore);

        $this->semaphore->expects($this->exactly(2))
            ->method('acquire');

        $this->semaphore->expects($this->exactly(2))
            ->method('release');

        $this->listener->acquireLock($event);
        $this->listener->acquireLock($event);
        $this->listener->releaseLock($event);
        $this->listener->releaseLock($event);
    }

    protected function setUp()
    {
        $this->factory = $this->getMockBuilder('Biplane\SysV\Factory')
            ->disableOriginalConstructor()
            ->getMock();
        $this->semaphore = $this->getMockBuilder('Biplane\SysV\Semaphore')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new ConcurrentListener($this->factory, 10);
    }

    protected function tearDown()
    {
        unset($this->factory, $this->semaphore, $this->listener);
    }

    /**
     * @param string $hash
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getEventMock($hash)
    {
        $mock = $this->getMockBuilder('Biplane\YandexDirect\Event\PreCallEvent')
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->any())
            ->method('getUser')
            ->willReturn($this->getUserMock($hash));

        return $mock;
    }

    private function getUserMock($hash = null)
    {
        $mock = $this->getMockBuilder('Biplane\YandexDirect\User')
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->any())
            ->method('getHashCode')
            ->willReturn($hash);

        return $mock;
    }
}
