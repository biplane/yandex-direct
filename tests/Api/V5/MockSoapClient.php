<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5;

use BadMethodCallException;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Soap\ApiSoapClient;
use SoapFault;

final class MockSoapClient extends ApiSoapClient
{
    /** @var array<string, mixed> */
    protected $options;

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options = [])
    {
        parent::__construct(__DIR__ . '/Fixtures/yandexapiservice.wsdl', $config, $options);

        $this->options = $options;
    }

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function getConfig(): Config
    {
        return $this->config;
    }

    protected function parseSoapFault(SoapFault $fault): ?ApiException
    {
        throw new BadMethodCallException('Not implemented');
    }

    public function getRequestId(): string
    {
        throw new BadMethodCallException('Not implemented');
    }
}
