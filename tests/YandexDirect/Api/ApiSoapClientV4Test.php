<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGeneratorInterface;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

use function hash;
use function sprintf;

class ApiSoapClientV4Test extends BaseTestCase
{
    public function testInjectSaopHeadersToRequest(): void
    {
        $config = new Config(['access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f']);
        $client = $this->createSoapClient(ApiSoapClientV4::class, $config, ['__doRequest']);

        $client->expects(self::once())
            ->method('__doRequest')
            ->with(self::logicalAnd(
                self::stringContains('<ns2:locale>en</ns2:locale>'),
                self::stringContains('<ns2:token>0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f</ns2:token>')
            ))
            ->willReturn(
                <<<'XML'
<SOAP-ENV:Envelope
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
  <SOAP-ENV:Body></SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML
            );

        $client->__soapCall('noop', []);
    }

    /**
     * @param array<mixed> $params
     *
     * @dataProvider provideFinancialMethods
     */
    public function testInjectSaopHeadersToRequestForFinancialMethod(
        string $usedMethod,
        string $methodName,
        array $params = []
    ): void {
        $config = new Config([
            'access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f',
            'client_login' => 'foo',
            'master_token' => 'fake',
        ]);

        $txNumberGenerator = $this->createMock(TransactionNumberGeneratorInterface::class);

        $client = $this->createSoapClient(ApiSoapClientV4::class, $config, ['__doRequest']);
        $client->setTransactionNumberGenerator($txNumberGenerator);

        $txNumberGenerator->method('generate')->willReturn(10009);

        $financeToken = hash('sha256', sprintf('fake10009%sfoo', $usedMethod));

        $client->expects(self::once())
            ->method('__doRequest')
            ->with(self::logicalAnd(
                self::stringContains('<ns2:locale>en</ns2:locale>'),
                self::stringContains('<ns2:token>0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f</ns2:token>'),
                self::stringContains('<ns2:operation_num>10009</ns2:operation_num>'),
                self::stringContains(sprintf('<ns2:finance_token>%s</ns2:finance_token>', $financeToken))
            ))
            ->willReturn(
                <<<'XML'
<SOAP-ENV:Envelope
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
  <SOAP-ENV:Body></SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML
            );

        $client->__soapCall($methodName, $params);
    }

    public function testThrowApiExceptionFromSoapFault(): void
    {
        $config = new Config(['access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f']);
        $client = $this->createSoapClient(ApiSoapClientV4::class, $config, ['__doRequest']);

        $client->method('__doRequest')->willReturn(
            <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
    xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <SOAP-ENV:Body>
    <SOAP-ENV:Fault>
      <faultcode xsi:type="xsd:string">SOAP-ENV:24</faultcode>
      <faultstring xsi:type="xsd:string">Указанный отчет не существует</faultstring>
      <detail xsi:type="xsd:string"/>
    </SOAP-ENV:Fault>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML
        );

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(24);
        $this->expectExceptionMessage('Указанный отчет не существует');

        try {
            $client->__soapCall('noop', []);
        } catch (ApiException $e) {
            self::assertSame(24, $e->getCode());
            self::assertEquals('Указанный отчет не существует', $e->getMessage());
            self::assertNull($e->getDetailMessage());
            self::assertInstanceOf(SoapFault::class, $e->getPrevious());

            throw $e;
        }
    }

    /**
     * @return iterable<array{string, string, 2?: mixed}>
     */
    public function provideFinancialMethods(): iterable
    {
        yield ['TransferMoney', 'TransferMoney'];
        yield ['GetCreditLimits', 'GetCreditLimits'];
        yield ['CreateInvoice', 'CreateInvoice'];
        yield ['PayCampaigns', 'PayCampaigns'];
        yield [
            'AccountManagementDeposit',
            'AccountManagement',
            [
                AccountManagementRequest::create()->setAction('Deposit'),
            ],
        ];

        yield [
            'AccountManagementInvoice',
            'AccountManagement',
            [
                AccountManagementRequest::create()->setAction('Invoice'),
            ],
        ];

        yield [
            'AccountManagementTransferMoney',
            'AccountManagement',
            [
                AccountManagementRequest::create()->setAction('TransferMoney'),
            ],
        ];
    }
}
