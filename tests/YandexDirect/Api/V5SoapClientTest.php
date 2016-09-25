<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Exception\ApiException;

class V5SoapClientTest extends BaseTestCase
{
    /**
     * @expectedException \Biplane\YandexDirect\Exception\ApiException
     * @expectedExceptionCode 53
     * @expectedExceptionMessage You must specify the Client-Login
     */
    public function testSoapFaultShouldBeWrappedToApiException()
    {
        $methodName = 'Foo';
        $methodParams = array();

        $faultResponse = new \stdClass();
        $faultResponse->errorCode = 53;
        $faultResponse->errorDetail = 'You must specify the Client-Login';

        $detail = new \stdClass();
        $detail->FaultResponse = $faultResponse;

        $fault = new \SoapFault('SOAP-ENV:Client', 'Authorization error', null, $detail);

        $client = $this->getSoapClient('__soapCall', '__getLastResponseHeaders');

        $client->expects($this->once())
            ->method('__soapCall')
            ->willThrowException($fault);

        $client->expects($this->any())
            ->method('__getLastResponseHeaders')
            ->willReturn(
                "HTTP/1.1 200 OK\r\n" .
                "Content-Type: text/xml\r\n" .
                "RequestId: 2289555458481966563\r\n" .
                "Units: 50/39750/40000\r\n" .
                "X-XSS-Protection: 1; mode=block\r\n"
            );

        try {
            $this->doInvoke($client, $methodName, $methodParams);
        } catch (ApiException $ex) {
            $this->assertSame($fault, $ex->getPrevious());
            $this->assertEquals('2289555458481966563', $ex->getRequestId());
            $this->assertEquals($methodName, $ex->getMethodName());

            throw $ex;
        }
    }

    protected function getSoapClient()
    {
        $methods = func_get_args();

        if (empty($methods)) {
            $methods = array('__soapCall');
        }

        return $this->createClient('Biplane\YandexDirect\Api\V5SoapClient', $methods);
    }
}
