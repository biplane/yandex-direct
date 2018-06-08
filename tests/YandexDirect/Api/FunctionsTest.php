<?php

namespace Biplane\Tests\YandexDirect\Api;

use PHPUnit\Framework\TestCase;
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
}
