<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Util;

use Biplane\YandexDirect\Util\StreamContextFactory;
use PHPUnit\Framework\TestCase;

use function implode;
use function stream_context_create;
use function stream_context_get_options;
use function stream_context_get_params;

final class StreamContextFactoryTest extends TestCase
{
    public function testCreateStreamContextWithoutMerge(): void
    {
        $streamContext = StreamContextFactory::create([
            'Accept' => '*/*',
            'Accept-Language' => 'en',
        ]);

        self::assertEquals(
            [
                'http' => ['header' => "Accept: */*\r\nAccept-Language: en"],
            ],
            stream_context_get_options($streamContext)
        );
    }

    public function testCreateStreamContextWithMergeHttpHeaders(): void
    {
        $baseStreamContext = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Accept: */*\r\nAccept-Language: en",
            ],
            'ssl' => [
                'peer_name' => 'localhost',
                'verify_peer' => true,
            ],
        ]);

        $streamContext = StreamContextFactory::create(
            [
                'Accept-Language' => 'ru',
                'Client-Login' => 'foo',
                'Use-Operator-Units' => 'true',
            ],
            $baseStreamContext
        );

        self::assertNotSame($baseStreamContext, $streamContext);
        self::assertEquals(
            [
                'http' => [
                    'method' => 'POST',
                    'header' => implode("\r\n", [
                        'Accept: */*',
                        'Accept-Language: ru',
                        'Client-Login: foo',
                        'Use-Operator-Units: true',
                    ]),
                ],
                'ssl' => [
                    'peer_name' => 'localhost',
                    'verify_peer' => true,
                ],
            ],
            stream_context_get_options($streamContext)
        );
    }

    public function testCeateStreamContextWithParamsInheritance(): void
    {
        $onNotification = static function (): void {
        };

        $baseStreamContext = stream_context_create(
            [
                'socket' => ['bindto' => '192.168.0.100:0'],
            ],
            ['notification' => $onNotification]
        );

        $streamContext = StreamContextFactory::create(
            [
                'Accept-Language' => 'ru',
                'Client-Login' => 'foo',
            ],
            $baseStreamContext
        );

        self::assertNotSame($baseStreamContext, $streamContext);
        self::assertEquals(
            [
                'http' => [
                    'header' => implode("\r\n", [
                        'Accept-Language: ru',
                        'Client-Login: foo',
                    ]),
                ],
                'socket' => ['bindto' => '192.168.0.100:0'],
            ],
            stream_context_get_options($streamContext)
        );

        $params = stream_context_get_params($streamContext);

        self::assertArrayHasKey('notification', $params);
        self::assertSame($onNotification, $params['notification']);
    }
}
