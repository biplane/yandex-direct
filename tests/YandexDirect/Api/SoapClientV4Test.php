<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\SoapClientV4;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Exception\ApiException;

class SoapClientV4Test extends BaseTestCase
{
    /**
     * @expectedException \Biplane\YandexDirect\Exception\ApiException
     * @expectedExceptionCode 54
     * @expectedExceptionMessage Недостаточно прав для выполнения запрошенной операции.
     */
    public function testSoapFaultShouldBeWrappedToApiException()
    {
        $methodName = 'Foo';
        $methodParams = [];
        $fault = new \SoapFault(
            'ENV:54',
            'Недостаточно прав',
            null,
            'Недостаточно прав для выполнения запрошенной операции.'
        );

        $client = $this->getSoapClient('__soapCall', 'getRequestId');

        $client->expects(self::once())
            ->method('__soapCall')
            ->willThrowException($fault);

        $client->expects(self::once())
            ->method('getRequestId')
            ->willReturn('f961bef9be62959982b56053366a57f2');

        try {
            $this->doInvoke($client, $methodName, $methodParams);
        } catch (ApiException $ex) {
            self::assertSame($fault, $ex->getPrevious());
            self::assertEquals('f961bef9be62959982b56053366a57f2', $ex->getRequestId());
            self::assertEquals($methodName, $ex->getMethodName());

            throw $ex;
        }
    }

    /**
     * @dataProvider getFinancialMethods
     */
    public function testAdditionalHeadersShouldBeAssignWhenInvokeFinancialMethod(
        $usedMethod,
        $methodName,
        array $params = []
    ) {
        $this->user->expects(self::once())
            ->method('createFinanceOperationNumber')
            ->willReturn(10009);

        $this->user->expects(self::once())
            ->method('createFinanceToken')
            ->with($usedMethod, 10009)
            ->willReturn('finance-token');

        $client = $this->getSoapClient('__doRequest');

        $client->expects(self::once())
            ->method('__doRequest')
            ->with(self::logicalAnd(
                self::stringContains('<ns2:operation_num>10009</ns2:operation_num>'),
                self::stringContains('<ns2:finance_token>finance-token</ns2:finance_token>')
            ))
            ->willReturn('<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Body></SOAP-ENV:Body></SOAP-ENV:Envelope>');

        $this->doInvoke($client, $methodName, $params);
    }

    public function getFinancialMethods()
    {
        return [
            ['TransferMoney', 'TransferMoney'],
            ['GetCreditLimits', 'GetCreditLimits'],
            ['CreateInvoice', 'CreateInvoice'],
            ['PayCampaigns', 'PayCampaigns'],
            ['AccountManagementDeposit', 'AccountManagement', [
                AccountManagementRequest::create()->setAction('Deposit'),
            ]],
            ['AccountManagementInvoice', 'AccountManagement', [
                AccountManagementRequest::create()->setAction('Invoice'),
            ]],
            ['AccountManagementTransferMoney', 'AccountManagement', [
                AccountManagementRequest::create()->setAction('TransferMoney'),
            ]],
        ];
    }

    protected function getSoapClient()
    {
        $methods = func_get_args();

        if (empty($methods)) {
            $methods = ['__soapCall'];
        }

        return $this->createClient(SoapClientV4::class, $methods);
    }
}
