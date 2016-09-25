<?php

namespace Biplane\Tests\YandexDirect\Event;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function getUserMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirect\User')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function getSoapClientMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirect\Api\SoapClient')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
