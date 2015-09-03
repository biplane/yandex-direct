<?php

namespace Biplane\Tests\YandexDirect\Event;

/**
 * TestCase
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function getApiMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirect\Api\V4\YandexApiService')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function getConfigurationMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirect\Configuration')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
