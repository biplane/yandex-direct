<?php

namespace Biplane\YandexDirectBundle\Tests\Factory;

use Biplane\YandexDirectBundle\ClientTypes;
use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;

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

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var ApiServiceFactory
     */
    private $factory;

    public function testApiProxyShouldBeCreatedByProfileName()
    {
        $config = $this->getConfigurationMock('foo');
        $profile = $this->getProfileMock($config);

        $this->profileManager->expects($this->once())
            ->method('get')
            ->with($this->equalTo('foo'))
            ->will($this->returnValue($profile));

        $this->clientFactory->expects($this->once())
            ->method('create')
            ->with($this->equalTo(ClientTypes::TYPE_SOAP), $this->identicalTo($config))
            ->will($this->returnValue($this->getClientMock()));

        $proxy = $this->factory->createApiService('foo');

        $this->assertInstanceOf('Biplane\YandexDirectBundle\Proxy\YandexApiService', $proxy);
    }

    public function testApiProxyShouldBeCreatedByDefaultProfile()
    {
        $config = $this->getConfigurationMock('bar');
        $profile = $this->getProfileMock($config);

        $this->profileManager->expects($this->once())
            ->method('has')
            ->with($this->equalTo('default'))
            ->will($this->returnValue(true));

        $this->profileManager->expects($this->once())
            ->method('get')
            ->with($this->equalTo('default'))
            ->will($this->returnValue($profile));

        $this->clientFactory->expects($this->once())
            ->method('create')
            ->with($this->equalTo(ClientTypes::TYPE_SOAP), $this->identicalTo($config))
            ->will($this->returnValue($this->getClientMock()));

        $this->factory->setDefaultProfile('default');

        $proxy = $this->factory->createApiService();

        $this->assertInstanceOf('Biplane\YandexDirectBundle\Proxy\YandexApiService', $proxy);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenDefaultProfileDoesNotExists()
    {
        $this->profileManager->expects($this->once())
            ->method('has')
            ->with($this->equalTo('foo'))
            ->will($this->returnValue(false));

        $this->factory->setDefaultProfile('foo');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Profile name cannot be null, because the default profile is not defined.
     */
    public function testThrowExceptionWhenProfileIsNullAndDefaultProfileIsNotDefained()
    {
        $this->factory->createApiService();
    }

    protected function setUp()
    {
        $this->profileManager = $this->getMock('Biplane\YandexDirectBundle\Profile\ProfileManager');
        $this->clientFactory = $this->getMock('Biplane\YandexDirectBundle\Factory\ClientFactory');
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $this->factory = new ApiServiceFactory($this->clientFactory, $this->profileManager, $this->dispatcher);
    }

    protected function tearDown()
    {
        unset($this->profileManager, $this->clientFactory, $this->dispatcher, $this->factory);
    }

    private function getProfileMock($configuration)
    {
        $mock = $this->getMock('Biplane\YandexDirectBundle\Profile\ProfileInterface');

        $mock->expects($this->once())
            ->method('getConfiguration')
            ->will($this->returnValue($configuration));

        $mock->expects($this->once())
            ->method('getType')
            ->will($this->returnValue(ClientTypes::TYPE_SOAP));

        return $mock;
    }

    private function getClientMock()
    {
        return $this->getMock('Biplane\YandexDirectBundle\Proxy\Client\ClientInterface');
    }

    private function getConfigurationMock($login)
    {
        return $this->getMockForAbstractClass(
            'Biplane\YandexDirectBundle\Configuration\BaseConfiguration',
            array($login)
        );
    }
}
