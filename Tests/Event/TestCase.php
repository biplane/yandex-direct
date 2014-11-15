<?php

namespace Biplane\YandexDirectBundle\Tests\Event;

/**
 * TestCase
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function getApiMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirectBundle\Proxy\YandexApiService')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function getConfigurationMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirectBundle\Configuration\BaseConfiguration')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
