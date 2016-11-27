<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Exception\ApiException;

class BaseClientV4Test extends BaseTestCase
{
    /**
     * @expectedException \Biplane\YandexDirect\Exception\ApiException
     * @expectedExceptionCode 54
     * @expectedExceptionMessage Недостаточно прав для выполнения запрошенной операции.
     */
    public function testSoapFaultShouldBeWrappedToApiException()
    {
        $methodName = 'Foo';
        $methodParams = array();
        $fault = new \SoapFault(
            'ENV:54',
            'Недостаточно прав',
            null,
            'Недостаточно прав для выполнения запрошенной операции.'
        );

        $client = $this->getSoapClient('__soapCall', 'getRequestId');

        $client->expects($this->once())
            ->method('__soapCall')
            ->willThrowException($fault);

        $client->expects($this->once())
            ->method('getRequestId')
            ->willReturn('f961bef9be62959982b56053366a57f2');

        try {
            $this->doInvoke($client, $methodName, $methodParams);
        } catch (ApiException $ex) {
            $this->assertSame($fault, $ex->getPrevious());
            $this->assertEquals('f961bef9be62959982b56053366a57f2', $ex->getRequestId());
            $this->assertEquals($methodName, $ex->getMethodName());

            throw $ex;
        }
    }

    /**
     * @dataProvider getFinancialMethods
     */
    public function testAdditionalHeadersShouldBeAssignWhenInvokeFinancialMethod($methodName, array $params = array())
    {
        $php = \PHPUnit_Extension_FunctionMocker::start($this, 'Biplane\YandexDirect\Api')
            ->mockFunction('time')
            ->getMock();

        $php->expects($this->any())
            ->method('time')
            ->willReturn(10009);

        $usedMethod = $methodName;

        if (count($params) === 1) {
            $usedMethod = $params[0]->getAction();
        }

        $this->user->expects($this->once())
            ->method('createFinanceToken')
            ->with($this->equalTo($usedMethod), $this->equalTo(10009))
            ->willReturn('finance-token');

        $client = $this->getSoapClient('__doRequest');

        $client->expects($this->once())
            ->method('__doRequest')
            ->with($this->logicalAnd(
                $this->stringContains('<ns2:operation_num>10009</ns2:operation_num>'),
                $this->stringContains('<ns2:finance_token>finance-token</ns2:finance_token>')
            ))
            ->willReturn('<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Body></SOAP-ENV:Body></SOAP-ENV:Envelope>');

        $this->doInvoke($client, $methodName, $params);
    }

    public function getFinancialMethods()
    {
        return array(
            array('TransferMoney'),
            array('GetCreditLimits'),
            array('CreateInvoice'),
            array('PayCampaigns'),
            array('AccountManagement', array(AccountManagementRequest::create()->setAction('Deposit'))),
            array('AccountManagement', array(AccountManagementRequest::create()->setAction('Invoice'))),
            array('AccountManagement', array(AccountManagementRequest::create()->setAction('TransferMoney'))),
        );
    }

    protected function getSoapClient()
    {
        $methods = func_get_args();

        if (empty($methods)) {
            $methods = array('__soapCall');
        }

        return $this->createClient('Biplane\YandexDirect\Api\SoapClientV4', $methods);
    }
}
