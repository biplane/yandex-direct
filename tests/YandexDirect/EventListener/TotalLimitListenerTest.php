<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\TotalLimitListener;

/**
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class TotalLimitListenerTest extends \PHPUnit_Framework_TestCase
{
    const LIMIT = 10;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $semaphore;

    /**
     * @var TotalLimitListener
     */
    private $listener;

    public function testAcquireAndReleaseLocking()
    {
        $profile = 'my_profile';
        $event = $this->getEventMock($profile);

        $this->factory->expects($this->once())
            ->method('createSemaphore')
            ->with(TotalLimitListener::SEMAPHORE_ID_PREFIX . $profile, self::LIMIT)
            ->will($this->returnValue($this->semaphore));

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

        $this->listener = new TotalLimitListener($this->factory, self::LIMIT);
    }

    protected function tearDown()
    {
        unset ($this->factory, $this->semaphore, $this->listener);
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
            ->method('getConfiguration')
            ->willReturn($this->getConfigurationMock($hash));

        return $mock;
    }

    private function getConfigurationMock($hash = null)
    {
        $mock = $this->getMockBuilder('Biplane\YandexDirect\Configuration')
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->any())
            ->method('getHashCode')
            ->willReturn($hash);

        return $mock;
    }
}
