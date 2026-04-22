<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use Override;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SoapFault;

use function hash;
use function implode;
use function sprintf;

final class ApiSoapClientV4Test extends TestCase
{
    public function testInjectSoapHeadersToRequest(): void
    {
        $config = new Config(['access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f']);
        $client = new class (null, $config, [
            'uri' => 'localhost',
            'location' => 'localhost',
        ]) extends ApiSoapClientV4 {
            #[Override]
            public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false, ?string $uriParserClass = null): ?string
            {
                TestCase::assertStringContainsString('<ns2:locale>en</ns2:locale>', $request);
                TestCase::assertStringContainsString('<ns2:token>0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f</ns2:token>', $request);

                return <<<'XML'
                    <SOAP-ENV:Envelope
                        xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                        SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
                      <SOAP-ENV:Body></SOAP-ENV:Body>
                    </SOAP-ENV:Envelope>
                    XML;
            }
        };

        $client->__soapCall('noop', []);
    }

    /** @param array<mixed> $params */
    #[DataProvider('provideFinancialMethods')]
    public function testInjectSoapHeadersToRequestForFinancialMethod(
        string $usedMethod,
        string $methodName,
        array $params = [],
    ): void {
        $operationNumber = 10009;
        $config = new Config([
            'access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f',
            'client_login' => 'foo',
            'master_token' => 'fake',
        ]);
        $expectedFinanceToken = hash(
            'sha256',
            implode('', [
                $config->getMasterToken(),
                $operationNumber,
                $usedMethod,
                $config->getClientLogin(),
            ]),
        );
        $txNumberGenerator = $this->createConfiguredStub(TransactionNumberGenerator::class, ['generate' => $operationNumber]);
        $client = new class ($config, $expectedFinanceToken) extends ApiSoapClientV4 {
            public function __construct(
                Config $config,
                private string $expectedFinanceToken,
            ) {
                parent::__construct(null, $config, [
                    'uri' => 'localhost',
                    'location' => 'localhost',
                ]);
            }

            #[Override]
            public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false, ?string $uriParserClass = null): ?string
            {
                TestCase::assertStringContainsString('<ns2:locale>en</ns2:locale>', $request);
                TestCase::assertStringContainsString('<ns2:token>0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f</ns2:token>', $request);
                TestCase::assertStringContainsString('<ns2:operation_num>10009</ns2:operation_num>', $request);
                TestCase::assertStringContainsString(
                    sprintf('<ns2:finance_token>%s</ns2:finance_token>', $this->expectedFinanceToken),
                    $request,
                );

                return <<<'XML'
                    <SOAP-ENV:Envelope
                        xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                        SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
                      <SOAP-ENV:Body></SOAP-ENV:Body>
                    </SOAP-ENV:Envelope>
                    XML;
            }
        };
        $client->setTransactionNumberGenerator($txNumberGenerator);

        $client->__soapCall($methodName, $params);
    }

    public function testThrowApiExceptionFromSoapFault(): void
    {
        $config = new Config(['access_token' => '0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f0f']);
        $client = new class (null, $config, [
            'uri' => 'localhost',
            'location' => 'localhost',
        ]) extends ApiSoapClientV4 {
            #[Override]
            public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false, ?string $uriParserClass = null): ?string
            {
                return <<<'XML'
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
                    XML;
            }

            #[Override]
            public function __getLastResponseHeaders(): ?string
            {
                return implode("\r\n", [
                    'HTTP/1.1 500 Internal Server Error',
                    'Content-Type: text/xml; charset=utf-8',
                    'RequestId: 1494518778014753349',
                    'SOAPServer: SOAP::Lite/Perl/0.55',
                ]);
            }
        };

        $this->expectException(ApiException::class);
        $this->expectExceptionCode(24);
        $this->expectExceptionMessage('Указанный отчет не существует');

        try {
            $client->__soapCall('noop', []);
        } catch (ApiException $e) {
            self::assertNull($e->getDetailMessage());
            self::assertInstanceOf(SoapFault::class, $e->getPrevious());
            self::assertEquals('1494518778014753349', $e->getRequestId());

            throw $e;
        }
    }

    /** @return iterable<array{string, string, 2?: array<mixed>}> */
    public static function provideFinancialMethods(): iterable
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
