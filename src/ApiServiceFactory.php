<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Biplane\YandexDirect\Config\SoapOptions;
use Biplane\YandexDirect\Log\SoapLogContextFactory;
use Biplane\YandexDirect\Log\SoapLogger;
use Biplane\YandexDirect\Runner\Runner;
use Biplane\YandexDirect\Soap\ApiSoapClient;
use ReflectionClass;

use function base64_encode;
use function count;
use function stream_context_create;

use const SOAP_1_1;
use const SOAP_SINGLE_ELEMENT_ARRAYS;

final class ApiServiceFactory
{
    private Runner $runner;
    private SoapLogContextFactory $logContextFactory;
    private SoapOptions $soapOptions;

    public function __construct(
        ?Runner $runner = null,
        private ?TransactionNumberGenerator $transactionNumberGenerator = null,
        private ?int $soapCallTimeout = null,
        private ?SoapLogger $logger = null,
        ?SoapLogContextFactory $logContextFactory = null,
        ?SoapOptions $options = null,
    ) {
        $this->runner = $runner ?? Runner::default();
        $this->soapOptions = $options ?? SoapOptions::default();
        $this->logContextFactory = $logContextFactory ?? new SoapLogContextFactory(
            ['authorization', 'member-authorization'],
            ['token'],
            [],
            [],
        );
    }

    /**
     * @psalm-param class-string<T> $serviceClass
     *
     * @psalm-return T
     *
     * @template T of ApiSoapClient
     */
    public function createService(Config $config, string $serviceClass): ApiSoapClient
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
            $config,
        );

        $soapClient = $this->createInstance($serviceClass, $config, $options);
        $soapClient->setRunner($this->runner);
        $soapClient->setLogContextFactory($this->logContextFactory);

        if ($this->soapCallTimeout > 0) {
            $soapClient->setSoapCallTimeout($this->soapCallTimeout);
        }

        if ($this->transactionNumberGenerator !== null && $soapClient instanceof ApiSoapClientV4) {
            $soapClient->setTransactionNumberGenerator($this->transactionNumberGenerator);
        }

        if ($this->logger !== null) {
            $soapClient->setLogger($this->logger);
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

        $options['compression'] = $this->soapOptions->getCompression();
        $options['cache_wsdl'] = $this->soapOptions->getWsdlCacheType();

        return $options;
    }
}
