<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Soap\ApiSoapClient;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * @return MockObject&User
     */
    protected function getUserMock()
    {
        return $this->createMock(User::class);
    }

    /**
     * @return MockObject&ApiSoapClient
     */
    protected function getSoapClientMock()
    {
        return $this->createMock(ApiSoapClient::class);
    }
}
