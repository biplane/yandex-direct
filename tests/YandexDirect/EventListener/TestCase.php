<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\ClientInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * @return MockObject&ClientInterface
     */
    protected function createClient(string $requestId, string $request, string $response)
    {
        $client = $this->createMock(ClientInterface::class);

        $client->method('getRequestId')->willReturn($requestId);
        $client->method('getLastRequest')->willReturn($request);
        $client->method('getLastResponse')->willReturn($response);

        return $client;
    }
}
