<?php

namespace Biplane\YandexDirectBundle\Tests\Factory;

use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiServiceFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $profileManager;
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $clientFactory;

    public function testCreateApiServiceByCustomProfile()
    {
        $this->profileManager
            ->expects($this->once())
            ->method('has')
            ->with($this->equalTo('foo'))
            ->will($this->returnValue(true));

        $this->profileManager
            ->expects($this->once())
            ->method('get')
            ->with('foo')
            ->will($this->returnValue($this->createProfileMock()));

        $this->clientFactory
            ->expects($this->once())
            ->method('create')
            ->will($this->returnValue($this->getMock('Biplane\\YandexDirectBundle\\Proxy\\Client\\ClientInterface')));

        $factory = new ApiServiceFactory($this->clientFactory, $this->profileManager);

        $this->assertTrue($factory->createApiService('foo') instanceof YandexApiService,
            '->createApiService() returns object of type YandexApiService for profile "foo".'
        );
    }

    public function testCreateApiServiceByDefaultProfile()
    {
        $this->profileManager
            ->expects($this->exactly(2))
            ->method('has')
            ->with('default')
            ->will($this->returnValue(true));

        $this->profileManager
            ->expects($this->once())
            ->method('get')
            ->with('default')
            ->will($this->returnValue($this->createProfileMock()));

        $this->clientFactory
            ->expects($this->once())
            ->method('create')
            ->will($this->returnValue($this->getMock('Biplane\\YandexDirectBundle\\Proxy\\Client\\ClientInterface')));

        $factory = new ApiServiceFactory($this->clientFactory, $this->profileManager);
        $factory->setDefaultProfile('default');

        $this->assertTrue($factory->createApiService() instanceof YandexApiService,
            '->createApiService() returns object of type YandexApiService for default profile.'
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenDefaultProfileDoesNotExists()
    {
        $this->profileManager
            ->expects($this->once())
            ->method('has')
            ->with('default')
            ->will($this->returnValue(false));

        $factory = new ApiServiceFactory($this->clientFactory, $this->profileManager);
        $factory->setDefaultProfile('default');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Profile named "foo" does not exist
     */
    public function testThrowExceptionWhenProfileDoesNotExists()
    {
        $this->profileManager
            ->expects($this->exactly(2))
            ->method('has')
            ->with($this->logicalOr($this->equalTo('default'), $this->equalTo('foo')))
            ->will($this->onConsecutiveCalls(true, false));

        $this->profileManager
            ->expects($this->never())
            ->method('get');

        $this->clientFactory
            ->expects($this->never())
            ->method('create');

        $factory = new ApiServiceFactory($this->clientFactory, $this->profileManager);
        $factory->setDefaultProfile('default');

        $factory->createApiService('foo');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Profile name cannot be null, because the default profile is not defined.
     */
    public function testThrowExceptionWhenProfileIsNullAndDefaultProfileIsNotDefained()
    {
        $factory = new ApiServiceFactory($this->clientFactory, $this->profileManager);

        $factory->createApiService();
    }

    protected function setUp()
    {
        $this->profileManager = $this->getMock('Biplane\\YandexDirectBundle\\Profile\\ProfileManager');
        $this->clientFactory = $this->getMock('Biplane\\YandexDirectBundle\\Factory\\ClientFactory');
    }

    protected function tearDown()
    {
        unset($this->profileManager, $this->clientFactory);
    }

    private function createProfileMock()
    {
        $mock = $this->getMockBuilder('Biplane\\YandexDirectBundle\\Profile\\Profile')
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->once())
            ->method('getConfiguration')
            ->will($this->returnValue(
                $this->getMockForAbstractClass(
                    'Biplane\\YandexDirectBundle\\Configuration\\BaseConfiguration',
                    array('foo')
                )
            ));

        $mock->expects($this->once())
            ->method('getClientType')
            ->will($this->returnValue('soap'));

        return $mock;
    }
}