<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\Exception\ApiException;

class SoapClientV5Test extends BaseTestCase
{
    public function testSoapFaultShouldBeWrappedToApiException()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionCode(53);
        $this->expectExceptionMessage('You must specify the Client-Login');

        $methodName = 'Foo';
        $methodParams = [];

        $faultResponse = new \stdClass();
        $faultResponse->errorCode = 53;
        $faultResponse->errorDetail = 'You must specify the Client-Login';

        $detail = new \stdClass();
        $detail->FaultResponse = $faultResponse;

        $fault = new \SoapFault('SOAP-ENV:Client', 'Authorization error', null, $detail);

        $client = $this->getSoapClient('__soapCall', '__getLastResponseHeaders');

        $client->method('__soapCall')->willThrowException($fault);
        $client->method('__getLastResponseHeaders')->willReturn(
            "HTTP/1.1 200 OK\r\n" .
            "Content-Type: text/xml\r\n" .
            "RequestId: 2289555458481966563\r\n" .
            "Units: 50/39750/40000\r\n" .
            "X-XSS-Protection: 1; mode=block\r\n"
        );

        try {
            $this->doInvoke($client, $methodName, $methodParams);
        } catch (ApiException $ex) {
            self::assertSame($fault, $ex->getPrevious());
            self::assertEquals('2289555458481966563', $ex->getRequestId());
            self::assertEquals($methodName, $ex->getMethodName());

            throw $ex;
        }
    }

    public function testGetUnits()
    {
        $client = $this->getSoapClient('__getLastResponseHeaders');

        $client->expects(self::once())
            ->method('__getLastResponseHeaders')
            ->willReturn(
                "HTTP/1.1 200 OK\r\n" .
                "Content-Type: text/xml\r\n" .
                "RequestId: 2289555458481966563\r\n" .
                "Units: 50/39750/40000\r\n" .
                "X-XSS-Protection: 1; mode=block\r\n"
            );

        $units = $client->getUnits();

        self::assertSame(50, $units->getSpent());
        self::assertSame(39750, $units->getRest());
        self::assertSame(40000, $units->getLimit());
    }

    public function testGetUnitsWhenHeaderNotFound()
    {
        $client = $this->getSoapClient('__getLastResponseHeaders');

        $client->expects(self::once())
            ->method('__getLastResponseHeaders')
            ->willReturn(null);

        $units = $client->getUnits();

        self::assertSame(-1, $units->getSpent());
        self::assertSame(-1, $units->getRest());
        self::assertSame(-1, $units->getLimit());
    }

    protected function getSoapClient()
    {
        $methods = func_get_args();

        if (empty($methods)) {
            $methods = ['__soapCall'];
        }

        return $this->createClient(SoapClientV5::class, $methods);
    }
}
