<?php

namespace Biplane\Tests\YandexDirect\Api;

use PHPUnit\Framework\TestCase;
use function Biplane\YandexDirect\Api\createStreamContext;
use function Biplane\YandexDirect\Api\parseArrayOfInt;
use function Biplane\YandexDirect\Api\parseArrayOfLong;
use function Biplane\YandexDirect\Api\parseArrayOfString;

class FunctionsTest extends TestCase
{
    public function testParseArrayOfStringShouldReturnArray()
    {
        $xml = '<NegativeKeywords><Items>бесплатно</Items><Items>плохие отзывы</Items></NegativeKeywords>';

        self::assertEquals([
            'бесплатно',
            'плохие отзывы',
        ], parseArrayOfString($xml));
    }

    public function testParseArrayOfStringShouldReturnNull()
    {
        $xml = '<NegativeKeywords xsi:nil="true"/>';

        self::assertNull(parseArrayOfString($xml));
    }

    public function testParseArrayOfIntShouldReturnArray()
    {
        $xml = '<Value><Items>123</Items><Items>0</Items></Value>';

        self::assertSame([123, 0], parseArrayOfInt($xml));
    }

    public function testParseArrayOfLongShouldReturnArray()
    {
        $xml = '<Value><Items>123.5</Items><Items>0</Items></Value>';

        self::assertSame([123.5, 0.0], parseArrayOfLong($xml));
    }

    public function testCreateStreamContextWithoutMerge()
    {
        $streamContext = createStreamContext([
            'header' => 'Accept: */*',
        ]);

        self::assertInternalType('resource', $streamContext);
        self::assertEquals(
            [
                'http' => [
                    'header' => 'Accept: */*',
                ],
            ],
            stream_context_get_options($streamContext)
        );
    }

    public function testCreateStreamContextWhenOriginContextHasHttpOptions()
    {
        $originStream = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Accept: */*\r\nContent-Type: application/json",
            ],
            'ssl' => [
                'peer_name' => 'localhost',
                'verify_peer' => true,
            ],
        ]);

        $streamContext = createStreamContext(
            [
                'header' => [
                    'Accept-Language: ru',
                    'Client-Login: foo',
                    'Use-Operator-Units: true',
                ],
                'protocol_version' => '1.1',
            ],
            $originStream
        );

        self::assertInternalType('resource', $streamContext);
        self::assertNotSame($originStream, $streamContext);
        self::assertEquals(
            [
                'http' => [
                    'method' => 'POST',
                    'header' => [
                        'Accept: */*',
                        'Content-Type: application/json',
                        'Accept-Language: ru',
                        'Client-Login: foo',
                        'Use-Operator-Units: true',
                    ],
                    'protocol_version' => '1.1',
                ],
                'ssl' => [
                    'peer_name' => 'localhost',
                    'verify_peer' => true,
                ],
            ],
            stream_context_get_options($streamContext)
        );
    }

    public function testCreateStreamContextWhenOriginContextHasParameters()
    {
        $onNotification = function () {
        };

        $originStream = stream_context_create(
            [
                'socket' => [
                    'bindto' => '192.168.0.100:0',
                ],
            ],
            [
                'notification' => $onNotification,
            ]
        );

        $streamContext = createStreamContext(
            [
                'header' => [
                    'Accept-Language: ru',
                    'Client-Login: foo',
                    'Use-Operator-Units: true',
                ],
            ],
            $originStream
        );

        self::assertInternalType('resource', $streamContext);
        self::assertNotSame($originStream, $streamContext);
        self::assertEquals(
            [
                'socket' => [
                    'bindto' => '192.168.0.100:0',
                ],
                'http' => [
                    'header' => [
                        'Accept-Language: ru',
                        'Client-Login: foo',
                        'Use-Operator-Units: true',
                    ],
                ],
            ],
            stream_context_get_options($streamContext)
        );

        $params = stream_context_get_params($streamContext);

        self::assertArrayHasKey('notification', $params);
        self::assertSame($onNotification, $params['notification']);
    }
}
