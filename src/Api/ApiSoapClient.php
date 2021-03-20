<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Event\EventEmitter;
use SoapFault;
use Throwable;

abstract class ApiSoapClient extends \SoapClient implements ClientInterface
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
     * @var EventEmitter|null
     */
    private $eventEmitter;

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(?string $wsdl, Config $config, array $options = [])
    {
        if ($wsdl !== null && $config->useSandbox()) {
            $wsdl = str_replace('api.direct.yandex.', 'api-sandbox.direct.yandex.', $wsdl);
        }

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

    public function setEventEmitter(?EventEmitter $emitter): void
    {
        $this->eventEmitter = $emitter;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRequest()
    {
        return $this->__getLastRequestHeaders() . "\n\n" . $this->__getLastRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastResponse()
    {
        return $this->__getLastResponseHeaders() . "\n\n" . $this->__getLastResponse();
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
        if ($this->eventEmitter !== null) {
            $this->eventEmitter->emitBeforeRequestEvent($this, $function_name, $arguments);
        }

        try {
            ini_set('default_socket_timeout', (string)$this->soapCallTimeout);

            $response = parent::__soapCall(
                $function_name,
                $arguments,
                $options,
                $input_headers,
                $output_headers
            );
        } catch (SoapFault $fault) {
            $exception = $this->handleSoapFault($fault) ?? $fault;

            if ($this->eventEmitter !== null) {
                $this->eventEmitter->emitFailRequestEvent($this, $function_name, $arguments, $exception);
            }

            throw $exception;
        } finally {
            ini_restore('default_socket_timeout');
        }

        if ($this->eventEmitter !== null) {
            $this->eventEmitter->emitAfterRequestEvent($this, $function_name, $arguments, $response);
        }

        return $response;
    }
}
