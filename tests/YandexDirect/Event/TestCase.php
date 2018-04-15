<?php

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getUserMock()
    {
        return $this->createMock(User::class);
    }

    protected function getSoapClientMock()
    {
        return $this->createMock(SoapClient::class);
    }
}
