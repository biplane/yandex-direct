<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap;

use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Log\SoapLogContextFactory;
use Biplane\YandexDirect\Log\SoapLogger;
use Biplane\YandexDirect\Runner\Runner;
use Biplane\YandexDirect\Soap\TypeConverter\DecimalTypeConverter;
use InvalidArgumentException;
use Override;
use ReflectionClass;
use ReturnTypeWillChange;
use RuntimeException;
use SoapClient;
use SoapFault;

use function array_map;
use function count;
use function in_array;
use function ini_restore;
use function ini_set;
use function preg_match;
use function sprintf;
use function str_replace;
use function trim;

abstract class ApiSoapClient extends SoapClient implements ClientInterface
{
    /** @var positive-int */
    private int $soapCallTimeout = 180;

    private ?Runner $runner = null;

    private ?SoapLogContextFactory $logContextFactory = null;

    private ?SoapLogger $logger = null;

    private string $serviceName;

    /** @param array<string, mixed> $options */
    public function __construct(?string $wsdl, protected Config $config, array $options = [])
    {
        if ($wsdl !== null && $config->useSandbox()) {
            $wsdl = str_replace('api.direct.yandex.', 'api-sandbox.direct.yandex.', $wsdl);
        }

        $typemap = $this->buildTypemap($options['typemap'] ?? []);

        if (count($typemap) > 0) {
            $options['typemap'] = $typemap;
        }

        parent::__construct($wsdl, $options);

        $this->serviceName = (new ReflectionClass($this))->getShortName();
    }

    abstract protected function parseSoapFault(SoapFault $fault): ?ApiException;

    /** @return positive-int */
    public function getSoapCallTimeout(): int
    {
        return $this->soapCallTimeout;
    }

    public function setSoapCallTimeout(int $timeout): void
    {
        if ($timeout < 1) {
            throw new InvalidArgumentException(sprintf(
                'Timeout for SOAP call must be a positive number. Got: %d',
                $timeout,
            ));
        }

        $this->soapCallTimeout = $timeout;
    }

    /** @internal */
    public function getRunner(): ?Runner
    {
        return $this->runner;
    }

    /** @internal */
    public function setRunner(Runner $runner): void
    {
        $this->runner = $runner;
    }

    /** @internal */
    public function getLogContextFactory(): ?SoapLogContextFactory
    {
        return $this->logContextFactory;
    }

    /** @internal */
    public function setLogContextFactory(?SoapLogContextFactory $factory): void
    {
        $this->logContextFactory = $factory;
    }

    /** @internal */
    public function getLogger(): ?SoapLogger
    {
        return $this->logger;
    }

    /** @internal */
    public function setLogger(?SoapLogger $logger): void
    {
        $this->logger = $logger;
    }

    #[Override]
    public function getRequestId(): string
    {
        $headers = $this->__getLastResponseHeaders();

        if ($headers !== null && preg_match('/^RequestId:\s?(.+)$/im', $headers, $m)) {
            return trim($m[1]);
        }

        return '';
    }

    /** @deprecated */
    #[Override]
    public function getLastRequest(): string
    {
        return $this->__getLastRequestHeaders() . "\n\n" . $this->__getLastRequest();
    }

    /** @deprecated */
    #[Override]
    public function getLastResponse(): string
    {
        return $this->__getLastResponseHeaders() . "\n\n" . $this->__getLastResponse();
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    #[ReturnTypeWillChange]
    public function __soapCall(string $name, array $args, ?array $options = null, $inputHeaders = null, &$outputHeaders = null): mixed
    {
        try {
            ini_set('default_socket_timeout', (string)$this->soapCallTimeout);

            $response = ($this->runner ?? Runner::default())->run(function () use (
                $name,
                $args,
                $options,
                $inputHeaders,
                &$outputHeaders,
            ) {
                try {
                    $response = parent::__soapCall($name, $args, $options, $inputHeaders, $outputHeaders);

                    $this->logSoapCall($name);

                    return $response;
                } catch (SoapFault $fault) {
                    $this->logSoapCall($name, $fault);

                    throw $this->parseSoapFault($fault) ?? $fault;
                }
            });
        } finally {
            ini_restore('default_socket_timeout');
        }

        return $response;
    }

    /** @return array<TypeConverter> */
    protected function getTypeConverters(): array
    {
        return [
            new DecimalTypeConverter(),
        ];
    }

    /**
     * @param array<array{type_name: string, type_ns: string, from_xml: callable, to_xml: callable}> $typemap
     *
     * @return array<array{type_name: string, type_ns: string, from_xml: callable, to_xml?: callable}>
     */
    private function buildTypemap(array $typemap): array
    {
        if (count($typemap) > 0) {
            $existingKeys = array_map(
                static function (array $typeMapping): string {
                    return $typeMapping['type_ns'] . ':' . $typeMapping['type_name'];
                },
                $typemap,
            );
        } else {
            $existingKeys = [];
        }

        foreach ($this->getTypeConverters() as $converter) {
            $key = $converter->getTypeNamespace() . ':' . $converter->getTypeName();

            if (in_array($key, $existingKeys, true)) {
                throw new RuntimeException(sprintf(
                    'Converter already registered for type "%s" in namespace "%s"',
                    $converter->getTypeName(),
                    $converter->getTypeNamespace(),
                ));
            }

            $definition = [
                'type_name' => $converter->getTypeName(),
                'type_ns' => $converter->getTypeNamespace(),
                'from_xml' => [$converter, 'fromXml'],
            ];

            if (! $converter instanceof DisableEncoder) {
                $definition['to_xml'] = [$converter, 'toXml'];
            }

            $typemap[] = $definition;
        }

        return $typemap;
    }

    private function logSoapCall(string $methodName, ?SoapFault $fault = null): void
    {
        if ($this->logger === null || $this->logContextFactory === null) {
            return;
        }

        $this->logger->log(
            $this->logContextFactory->create(
                $this->serviceName,
                $methodName,
                (string)$this->__getLastRequestHeaders(),
                (string)$this->__getLastRequest(),
                (string)$this->__getLastResponseHeaders(),
                (string)$this->__getLastResponse(),
                $this->getRequestId(),
                $fault,
            ),
        );
    }
}
