<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

class ApiSoapClientV5Test extends BaseTestCase
{
    public function testThrowApiExceptionFromSoapFault(): void
    {
        $config = new Config(['access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f']);
        $client = $this->createSoapClient(ApiSoapClientV5::class, $config, ['__doRequest']);

        $client->method('__doRequest')->willReturn(
            <<<'XML'
<?xml version="1.0" encoding="UTF-8"?> <SOAP-ENV:Envelope
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
  <SOAP-ENV:Body>
    <SOAP-ENV:Fault>
      <faultcode>SOAP-ENV:Client</faultcode>
      <faultstring>Некорректный запрос</faultstring>
      <detail>
        <ns3:FaultResponse xmlns:ns3="http://api.direct.yandex.com/v5/general">
          <requestId>1010101010101010101</requestId>
          <errorCode>8000</errorCode>
          <errorDetail>В TextAd отсутствует обязательное поле Text</errorDetail>
        </ns3:FaultResponse>
      </detail>
    </SOAP-ENV:Fault>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML
        );

        $this->expectException(ApiException::class);

        try {
            $client->__soapCall('noop', []);
        } catch (ApiException $e) {
            self::assertEquals('Некорректный запрос: В TextAd отсутствует обязательное поле Text', $e->getMessage());
            self::assertEquals('В TextAd отсутствует обязательное поле Text', $e->getDetailMessage());
            self::assertSame(8000, $e->getCode());
            self::assertEquals('1010101010101010101', $e->getRequestId());
            self::assertInstanceOf(SoapFault::class, $e->getPrevious());

            throw $e;
        }
    }

    public function testParseUnitsHeader(): void
    {
        $config = new Config(['access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f']);
        $client = $this->createSoapClient(ApiSoapClientV5::class, $config, ['__getLastResponseHeaders']);

        $client->method('__getLastResponseHeaders')->willReturn(
            "Transfer-Encoding: chunked\r\n" .
            "Units: 11/99968/100000\r\n" .
            "Units-Used-Login: agent\r\n"
        );

        $units = $client->getUnits();

        self::assertNotNull($units);
        self::assertSame(11, $units->getSpent());
        self::assertSame(99968, $units->getRest());
        self::assertSame(100000, $units->getLimit());
        self::assertEquals('agent', $units->getUsedLogin());
    }
}
