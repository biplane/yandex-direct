<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Event\EventEmitter;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Runner\Runner;
use InvalidArgumentException;
use SoapClient;
use SoapFault;
use Throwable;

use function ini_restore;
use function ini_set;
use function sprintf;
use function str_replace;

abstract class ApiSoapClient extends SoapClient implements ClientInterface
{
    /** @var Config */
    protected $config;

    /** @var int */
    private $soapCallTimeout = 180;

    /** @var EventEmitter|null */
    private $eventEmitter;

    /** @var Runner|null */
    private $runner = null;

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

    abstract protected function parseSoapFault(SoapFault $fault): ?ApiException;

    public function getSoapCallTimeout(): int
    {
        return $this->soapCallTimeout;
    }

    public function setSoapCallTimeout(int $timeout): void
    {
        if ($timeout < 1) {
            throw new InvalidArgumentException(sprintf(
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

    public function getRunner(): ?Runner
    {
        return $this->runner;
    }

    public function setRunner(Runner $runner): void
    {
        $this->runner = $runner;
    }

    public function getLastRequest(): string
    {
        return $this->__getLastRequestHeaders() . "\n\n" . $this->__getLastRequest();
    }

    public function getLastResponse(): string
    {
        return $this->__getLastResponseHeaders() . "\n\n" . $this->__getLastResponse();
    }

    /**
     * {@inheritDoc}
     */
    public function __soapCall($name, $args, $options = null, $inputHeaders = null, &$outputHeaders = null)
    {
        if ($this->eventEmitter !== null) {
            $this->eventEmitter->emitBeforeRequestEvent($this, $name, $args);
        }

        try {
            ini_set('default_socket_timeout', (string)$this->soapCallTimeout);

            $response = ($this->runner ?? Runner::default())->run(function () use (
                $name,
                $args,
                $options,
                $inputHeaders,
                &$outputHeaders
            ) {
                try {
                    return parent::__soapCall($name, $args, $options, $inputHeaders, $outputHeaders);
                } catch (SoapFault $fault) {
                    throw $this->parseSoapFault($fault) ?? $fault;
                }
            });
        } catch (Throwable $e) {
            if ($this->eventEmitter !== null) {
                $this->eventEmitter->emitFailRequestEvent($this, $name, $args, $e);
            }

            throw $e;
        } finally {
            ini_restore('default_socket_timeout');
        }

        if ($this->eventEmitter !== null) {
            $this->eventEmitter->emitAfterRequestEvent($this, $name, $args, $response);
        }

        return $response;
    }
}
