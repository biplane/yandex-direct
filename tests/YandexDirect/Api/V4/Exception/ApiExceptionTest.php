<?php

namespace Biplane\Tests\YandexDirect\Api\V4\Exception;

use Biplane\YandexDirect\Exception\ApiException;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class ApiExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testNetworkExceptionShouldBeCreatedFromSoapFault()
    {
        $fault = new \SoapFault('HTTP', 'Connection timeout.');

        $exception = ApiException::createFromFault($fault, 'foo', 'request-id');

        $this->assertInstanceOf('Biplane\YandexDirect\Exception\NetworkException', $exception);
        $this->assertEquals(0, $exception->getCode());
        $this->assertEquals('Connection timeout.', $exception->getMessage());
        $this->assertSame($fault, $exception->getPrevious());
        $this->assertEquals('foo', $exception->getMethodName());
        $this->assertEquals('request-id', $exception->getRequestId());
    }

    public function testApiExceptionShouldBeCreatedFromSoapFault()
    {
        $fault = new \SoapFault('SOAP:54', 'Access denied.');

        $exception = ApiException::createFromFault($fault, 'foo', 'request-id');

        $this->assertInstanceOf('Biplane\YandexDirect\Exception\ApiException', $exception);
        $this->assertEquals(54, $exception->getCode());
        $this->assertEquals('Access denied.', $exception->getMessage());
        $this->assertSame($fault, $exception->getPrevious());
        $this->assertEquals('foo', $exception->getMethodName());
        $this->assertEquals('request-id', $exception->getRequestId());
    }

    public function testApiExceptionWithDetailMessageShouldBeCreatedFromSoapFault()
    {
        $fault = new \SoapFault('SOAP:27', 'Invalid banner.', null, 'Title cannot be empty.');

        $exception = ApiException::createFromFault($fault, 'foo', 'request-id');

        $this->assertInstanceOf('Biplane\YandexDirect\Exception\ApiException', $exception);
        $this->assertEquals(27, $exception->getCode());
        $this->assertEquals("Invalid banner.\nTitle cannot be empty.", $exception->getMessage());
        $this->assertEquals('Title cannot be empty.', $exception->getDetailMessage());
        $this->assertSame($fault, $exception->getPrevious());
        $this->assertEquals('foo', $exception->getMethodName());
        $this->assertEquals('request-id', $exception->getRequestId());
    }
}
