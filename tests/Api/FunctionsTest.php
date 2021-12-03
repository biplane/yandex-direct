<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use PHPUnit\Framework\TestCase;

use function Biplane\YandexDirect\Api\parseArrayOfInt;
use function Biplane\YandexDirect\Api\parseArrayOfLong;
use function Biplane\YandexDirect\Api\parseArrayOfString;

class FunctionsTest extends TestCase
{
    public function testParseArrayOfStringShouldReturnArray(): void
    {
        $xml = '<NegativeKeywords><Items>бесплатно</Items><Items>плохие отзывы</Items></NegativeKeywords>';

        self::assertEquals([
            'бесплатно',
            'плохие отзывы',
        ], parseArrayOfString($xml));
    }

    public function testParseArrayOfStringShouldReturnNull(): void
    {
        $xml = '<NegativeKeywords xsi:nil="true"/>';

        self::assertNull(parseArrayOfString($xml));
    }

    public function testParseArrayOfIntShouldReturnArray(): void
    {
        $xml = '<Value><Items>123</Items><Items>0</Items></Value>';

        self::assertSame([123, 0], parseArrayOfInt($xml));
    }

    public function testParseArrayOfLongShouldReturnArray(): void
    {
        $xml = '<Value><Items>123.5</Items><Items>0</Items></Value>';

        self::assertSame([123.5, 0.0], parseArrayOfLong($xml));
    }
}
