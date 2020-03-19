<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Config;
use SoapFault;
use Throwable;

abstract class ApiSoapClient extends \SoapClient
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @var int
     */
    private $soapCallTimeout = 180;

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(?string $wsdl, Config $config, array $options = [])
    {
        parent::__construct($wsdl, $options);

        $this->config = $config;
    }

    abstract protected function handleSoapFault(SoapFault $fault): ?Throwable;

    public function getSoapCallTimeout(): int
    {
        return $this->soapCallTimeout;
    }

    public function setSoapCallTimeout(int $timeout): void
    {
        if ($timeout < 1) {
            throw new \InvalidArgumentException(sprintf(
                'Timeout for SOAP call must be a positive number. Got: %d',
                $timeout
            ));
        }

        $this->soapCallTimeout = $timeout;
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
        try {
            ini_set('default_socket_timeout', (string)$this->soapCallTimeout);

            return parent::__soapCall(
                $function_name,
                $arguments,
                $options,
                $input_headers,
                $output_headers
            );
        } catch (SoapFault $fault) {
            $exception = $this->handleSoapFault($fault);

            throw $exception ?? $fault;
        } finally {
            ini_restore('default_socket_timeout');
        }
    }
}
