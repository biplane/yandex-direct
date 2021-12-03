<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator\ClockTransactionNumberGenerator;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use LogicException;
use SoapFault;
use SoapHeader;

use function assert;
use function hash;
use function in_array;
use function property_exists;
use function strrpos;
use function substr;

class ApiSoapClientV4 extends ApiSoapClient
{
    private const SCHEMA_NAMESPACE = 'API';

    /** @var TransactionNumberGenerator|null */
    private $transactionNumberGenerator;

    public function getTransactionNumberGenerator(): TransactionNumberGenerator
    {
        if ($this->transactionNumberGenerator === null) {
            $this->transactionNumberGenerator = new ClockTransactionNumberGenerator();
        }

        return $this->transactionNumberGenerator;
    }

    public function setTransactionNumberGenerator(TransactionNumberGenerator $generator): void
    {
        $this->transactionNumberGenerator = $generator;
    }

    /**
     * {@inheritdoc}
     *
     * @internal
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0)
    {
        return fixNamespace(
            parent::__doRequest($request, $location, $action, $version, $oneWay),
            self::SCHEMA_NAMESPACE
        );
    }

    /**
     * {@inheritDoc}
     */
    public function __soapCall($name, $args, $options = null, $inputHeaders = null, &$outputHeaders = null)
    {
        $inputHeaders[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'locale', $this->config->getLocale(Config::API_4));
        $inputHeaders[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'token', $this->config->getAccessToken());

        if ($this->isFinancialMethod($name, $args)) {
            $usedMethod = $name;

            if ($name === 'AccountManagement') {
                $usedMethod .= $args[0]->getAction();
            }

            $operationNum = $this->getTransactionNumberGenerator()->generate();
            $financeToken = $this->generateFinanceToken($usedMethod, $operationNum);

            $inputHeaders[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'finance_token', $financeToken);
            $inputHeaders[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'operation_num', $operationNum);
        }

        return parent::__soapCall($name, $args, $options, $inputHeaders, $outputHeaders);
    }

    protected function parseSoapFault(SoapFault $fault): ?ApiException
    {
        if (! property_exists($fault, 'faultcode')) {
            return null;
        }

        $code = 0;
        $pos = strrpos($fault->faultcode, ':');

        if ($pos > 0) {
            $code = (int)substr($fault->faultcode, $pos + 1);
        }

        if ($code > 0) {
            $detailMessage = property_exists($fault, 'detail') ? $fault->detail : null;

            if ($detailMessage === '') {
                $detailMessage = null;
            }

            $exception = new ApiException(
                property_exists($fault, 'faultstring') ? $fault->faultstring : $fault->getMessage(),
                $code,
                $detailMessage,
                $fault
            );
            $requestId = $this->getRequestId();

            if ($requestId !== '') {
                $exception->setRequestId($requestId);
            }

            return $exception;
        }

        return null;
    }

    /**
     * @param array<mixed> $params
     */
    private function isFinancialMethod(string $methodName, array $params): bool
    {
        if ($methodName === 'AccountManagement') {
            $request = $params[0];
            assert($request instanceof AccountManagementRequest);

            if (in_array($request->getAction(), ['Deposit', 'Invoice', 'TransferMoney'], true)) {
                return true;
            }
        }

        return in_array(
            $methodName,
            [
                'TransferMoney',
                'GetCreditLimits',
                'CreateInvoice',
                'PayCampaigns',
            ],
            true
        );
    }

    private function generateFinanceToken(string $methodName, int $operationNum): string
    {
        if ($this->config->getMasterToken() === null) {
            throw new LogicException('The finance token cannot be created without the master token.');
        }

        if ($this->config->getClientLogin() === null) {
            throw new LogicException('The finance token cannot be created without the client login.');
        }

        return hash(
            'sha256',
            $this->config->getMasterToken() . $operationNum . $methodName . $this->config->getClientLogin()
        );
    }
}
