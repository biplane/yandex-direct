<?php

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function getUserMock()
    {
        return $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function getSoapClientMock()
    {
        return $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
