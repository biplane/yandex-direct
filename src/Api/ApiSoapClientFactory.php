<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGeneratorInterface;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Runner\Runner;
use ReflectionClass;

use function base64_encode;
use function count;
use function stream_context_create;

use const SOAP_1_1;
use const SOAP_SINGLE_ELEMENT_ARRAYS;

final class ApiSoapClientFactory
{
    /** @var int|null */
    private $soapCallTimeout;
    /** @var TransactionNumberGeneratorInterface|null */
    private $transactionNumberGenerator;
    /** @var Runner */
    private $runner;

    public function __construct(
        ?Runner $runner = null,
        ?TransactionNumberGeneratorInterface $transactionNumberGenerator = null,
        ?int $soapCallTimeout = null
    ) {
        $this->runner = $runner ?? Runner::default();
        $this->transactionNumberGenerator = $transactionNumberGenerator;
        $this->soapCallTimeout = $soapCallTimeout;
    }

    /**
     * @psalm-param class-string<T> $serviceClass
     *
     * @psalm-return T
     *
     * @template T of ApiSoapClient
     */
    public function createSoapClient(Config $config, string $serviceClass): ApiSoapClient
    {
        $options = $this->extendOptions(
            [
                'soap_version' => SOAP_1_1,
                'encoding' => 'UTF-8',
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'trace' => true,
                'exceptions' => true,
                'keep_alive' => false,
            ],
            $config
        );

        $soapClient = $this->createInstance($serviceClass, $config, $options);
        $soapClient->setRunner($this->runner);

        if ($this->soapCallTimeout > 0) {
            $soapClient->setSoapCallTimeout($this->soapCallTimeout);
        }

        if ($this->transactionNumberGenerator !== null && $soapClient instanceof ApiSoapClientV4) {
            $soapClient->setTransactionNumberGenerator($this->transactionNumberGenerator);
        }

        return $soapClient;
    }

    /**
     * @param array<string, mixed> $options
     * @psalm-param class-string<T> $serviceClass
     *
     * @psalm-return T
     *
     * @template T of ApiSoapClient
     */
    private function createInstance(string $serviceClass, Config $config, array $options): ApiSoapClient
    {
        $reflection = new ReflectionClass($serviceClass);

        return $this->runner->run(static function () use ($reflection, $config, $options): ApiSoapClient {
            return $reflection->newInstance($config, $options);
        });
    }

    /**
     * @param array<string, mixed> $options
     *
     * @return array<string, mixed>
     */
    private function extendOptions(array $options, Config $config): array
    {
        if ($config->getProxyHost() !== null) {
            $options['proxy_host'] = $config->getProxyHost();
        }

        if ($config->getProxyPort() !== null) {
            $options['proxy_port'] = $config->getProxyPort();
        }

        if ($config->proxyAuthenticationRequired()) {
            $options['proxy_login'] = $config->getProxyUsername();
            $options['proxy_password'] = $config->getProxyPassword();
        }

        $contextOptions = [];

        if ($config->getProxyHost() !== null && $config->getProxyPort() !== null) {
            $contextOptions['http']['proxy'] = $config->getProxyHost() . ':' . $config->getProxyPort();
        }

        if ($config->proxyAuthenticationRequired()) {
            $credentials = $config->getProxyUsername() . ':' . $config->getProxyPassword();
            $contextOptions['http']['header'][] = 'Authorization: Basic ' . base64_encode($credentials);
        }

        if (count($contextOptions) > 0) {
            $options['stream_context'] = stream_context_create($contextOptions);
        }

        return $options;
    }
}
