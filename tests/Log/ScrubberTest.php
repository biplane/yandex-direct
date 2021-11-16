<?php

declare(strict_types=1);

namespace Biplane\Tests\Log;

use Biplane\YandexDirect\Log\Scrubber;
use PHPUnit\Framework\TestCase;

use function implode;

final class ScrubberTest extends TestCase
{
    public function testScrubHttpHeaders(): void
    {
        $headers = implode("\r\n", [
            'POST /v5/keywordsresearch HTTP/1.1',
            'Host: soap.direct.yandex.ru',
            'Connection: Keep-Alive',
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: "https://api.direct.yandex.com/v5/keywordsresearch/deduplicate"',
            'Authorization: Bearer Secr3tT0keNNn',
            'Accept-Language: ru',
            'Client-Login: alice',
        ]);

        $result = Scrubber::scrubHttpHeaders($headers, ['authorization', 'client-login']);

        self::assertEquals(
            implode("\r\n", [
                'POST /v5/keywordsresearch HTTP/1.1',
                'Host: soap.direct.yandex.ru',
                'Connection: Keep-Alive',
                'Content-Type: text/xml; charset=utf-8',
                'SOAPAction: "https://api.direct.yandex.com/v5/keywordsresearch/deduplicate"',
                'Authorization: REDACTED',
                'Accept-Language: ru',
                'Client-Login: REDACTED',
            ]),
            $result
        );
    }

    public function testScrubSoapHeaders(): void
    {
        $soap = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    xmlns:ns1="API"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema"
    xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"
    SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
        <ns1:locale>ru</ns1:locale>
        <ns1:token>SecR3t-T0keNn</ns1:token>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <ns1:CreateNewForecast>
            <params xsi:type="ns1:NewForecastInfo">
                <Categories xsi:nil="true"/>
                <Phrases SOAP-ENC:arrayType="xsd:string[1]" xsi:type="ns1:ArrayOfString">
                    <item xsi:type="xsd:string">купить слона</item>
                </Phrases>
                <GeoID SOAP-ENC:arrayType="xsd:int[1]" xsi:type="ns1:ArrayOfInteger">
                    <item xsi:type="xsd:int">1</item>
                </GeoID>
                <Currency xsi:type="xsd:string">RUB</Currency>
                <AuctionBids xsi:nil="true"/>
            </params>
        </ns1:CreateNewForecast>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
        $result = Scrubber::scrubSoapHeaders($soap, ['token', 'unknown_header']);

        $expected = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    xmlns:ns1="API"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema"
    xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"
    SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
        <ns1:locale>ru</ns1:locale>
        <ns1:token>REDACTED</ns1:token>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <ns1:CreateNewForecast>
            <params xsi:type="ns1:NewForecastInfo">
                <Categories xsi:nil="true"/>
                <Phrases SOAP-ENC:arrayType="xsd:string[1]" xsi:type="ns1:ArrayOfString">
                    <item xsi:type="xsd:string">купить слона</item>
                </Phrases>
                <GeoID SOAP-ENC:arrayType="xsd:int[1]" xsi:type="ns1:ArrayOfInteger">
                    <item xsi:type="xsd:int">1</item>
                </GeoID>
                <Currency xsi:type="xsd:string">RUB</Currency>
                <AuctionBids xsi:nil="true"/>
            </params>
        </ns1:CreateNewForecast>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
        self::assertEquals($expected, $result);
    }
}
