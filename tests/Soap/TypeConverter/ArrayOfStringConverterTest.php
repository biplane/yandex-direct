<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Soap\TypeConverter;

use Biplane\YandexDirect\Soap\TypeConverter\ArrayOfStringConverter;
use PHPUnit\Framework\TestCase;

final class ArrayOfStringConverterTest extends TestCase
{
    public function testConvertXmlToArray(): void
    {
        $xml = '<NegativeKeywords><Items>бесплатно</Items><Items>плохие отзывы</Items></NegativeKeywords>';
        $converter = new ArrayOfStringConverter('API');

        $decoded = $converter->fromXml($xml);

        self::assertEquals(
            [
                'бесплатно',
                'плохие отзывы',
            ],
            $decoded
        );
    }

    public function testConvertXmlToNull(): void
    {
        $converter = new ArrayOfStringConverter('API');

        self::assertNull($converter->fromXml('<NegativeKeywords xsi:nil="true"/>'));
    }
}
