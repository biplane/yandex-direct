<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Api\Finance\ClockTransactionNumberGenerator;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGeneratorInterface;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;
use SoapHeader;
use Throwable;

class ApiSoapClientV4 extends ApiSoapClient
{
    private const SCHEMA_NAMESPACE = 'API';

    private $requestId;
    private $transactionNumberGenerator;

    /**
     * {@inheritDoc}
     */
    public function getRequestId()
    {
        if ($this->requestId === null) {
            throw new \LogicException('You can get the identifier of request only after call a method of API.');
        }

        return $this->requestId;
    }

    public function getTransactionNumberGenerator(): TransactionNumberGeneratorInterface
    {
        if ($this->transactionNumberGenerator === null) {
            $this->transactionNumberGenerator = new ClockTransactionNumberGenerator();
        }

        return $this->transactionNumberGenerator;
    }

    public function setTransactionNumberGenerator(TransactionNumberGeneratorInterface $generator): void
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
        $this->requestId = (string)(microtime(true) * 1000000);

        return fixNamespace(
            parent::__doRequest($request, $location, $action, $version, $oneWay),
            self::SCHEMA_NAMESPACE
        );
    }

    /**
     * {@inheritDoc}
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        $input_headers[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'locale', $this->config->getLocale(Config::API_4));
        $input_headers[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'token', $this->config->getAccessToken());

        if ($this->isFinancialMethod($function_name, $arguments)) {
            $usedMethod = $function_name;

            if ($function_name === 'AccountManagement') {
                $usedMethod .= $arguments[0]->getAction();
            }

            $operationNum = $this->getTransactionNumberGenerator()->generate();
            $financeToken = $this->generateFinanceToken($usedMethod, $operationNum);

            $input_headers[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'finance_token', $financeToken);
            $input_headers[] = new SoapHeader(self::SCHEMA_NAMESPACE, 'operation_num', $operationNum);
        }

        return parent::__soapCall(
            $function_name,
            $arguments,
            $options,
            $input_headers,
            $output_headers
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function handleSoapFault(SoapFault $fault): ?Throwable
    {
        if (!property_exists($fault, 'faultcode')) {
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

            return new ApiException(
                property_exists($fault, 'faultstring') ? $fault->faultstring : $fault->getMessage(),
                $code,
                $detailMessage,
                $fault
            );
        }

        return null;
    }

    /**
     * @param array<mixed> $params
     */
    private function isFinancialMethod(string $methodName, array $params): bool
    {
        if ($methodName === 'AccountManagement') {
            /** @var AccountManagementRequest $request */
            $request = $params[0];

            if (in_array($request->getAction(), ['Deposit', 'Invoice', 'TransferMoney'], true)) {
                return true;
            }
        }

        if (
            in_array($methodName, [
                'TransferMoney',
                'GetCreditLimits',
                'CreateInvoice',
                'PayCampaigns',
            ], true)
        ) {
            return true;
        }

        return false;
    }

    private function generateFinanceToken(string $methodName, int $operationNum): string
    {
        if ($this->config->getMasterToken() === null) {
            throw new \LogicException('The finance token cannot be created without the master token.');
        }

        if ($this->config->getClientLogin() === null) {
            throw new \LogicException('The finance token cannot be created without the client login.');
        }

        return hash(
            'sha256',
            $this->config->getMasterToken() . $operationNum . $methodName . $this->config->getClientLogin()
        );
    }
}
