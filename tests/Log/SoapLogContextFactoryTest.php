<?php

declare(strict_types=1);

namespace Biplane\Tests\Log;

use Biplane\YandexDirect\Log\SoapLogContextFactory;
use PHPUnit\Framework\TestCase;
use SoapFault;

use function implode;

final class SoapLogContextFactoryTest extends TestCase
{
    public function testBuild(): void
    {
        $requestHeaders = implode("\r\n", [
            'Host: soap.direct.yandex.ru',
            'Content-Type: text/xml; charset=utf-8',
            'Authorization: Bearer Secr3tT0keNNn',
            'Client-Login: alice',
        ]);
        $requestBody = <<<'XML'
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
            <params xsi:type="ns1:NewForecastInfo" />
        </ns1:CreateNewForecast>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
        $responseHeaders = implode("\r\n", [
            'HTTP/1.1 200 OK',
            "Content-Security-Policy: default-src 'none'",
            'Content-Type: text/xml;charset=utf-8',
            'RequestId: 1306575703286509578',
            'Units: 10/27995466/28000500',
            'Units-Used-Login: alice',
            'X-XSS-Protection: 1; mode=block',
        ]);
        $responseBody = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope
    SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
    xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <SOAP-ENV:Header>
        <ns1:locale>ru</ns1:locale>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <namesp1:CreateNewForecastResponse xmlns:namesp1="API">
            <s-gensym3 xsi:type="xsd:int">1493024769</s-gensym3>
        </namesp1:CreateNewForecastResponse>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;

        $factory = new SoapLogContextFactory(['authorization'], ['token'], ['units-used-login'], ['locale']);

        $context = $factory->create(
            'Stub',
            'ping',
            $requestHeaders,
            $requestBody,
            $responseHeaders,
            $responseBody,
            '1306575703286509578',
            new SoapFault('SOAP-ENV:Client', 'Bad request')
        );

        self::assertEquals('Stub', $context['service']);
        self::assertEquals('ping', $context['method']);
        self::assertEquals('1306575703286509578', $context['request_id']);
        self::assertEquals(
            implode("\r\n", [
                'Host: soap.direct.yandex.ru',
                'Content-Type: text/xml; charset=utf-8',
                'Authorization: REDACTED',
                'Client-Login: alice',
            ]),
            $context['request_headers']
        );
        self::assertStringContainsString('<ns1:token>REDACTED</ns1:token>', $context['request']);
        self::assertEquals(
            implode("\r\n", [
                'HTTP/1.1 200 OK',
                "Content-Security-Policy: default-src 'none'",
                'Content-Type: text/xml;charset=utf-8',
                'RequestId: 1306575703286509578',
                'Units: 10/27995466/28000500',
                'Units-Used-Login: REDACTED',
                'X-XSS-Protection: 1; mode=block',
            ]),
            $context['response_headers']
        );
        self::assertStringContainsString('<ns1:locale>REDACTED</ns1:locale>', $context['response']);
        self::assertEquals('Bad request', $context['fault']);
        self::assertTrue($context['failed']);
    }
}
