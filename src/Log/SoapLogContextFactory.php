<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log;

use SoapFault;

/** @psalm-import-type Context from SoapLogger */
final class SoapLogContextFactory
{
    /**
     * @param array<string> $requestHttpHeadersToScrub
     * @param array<string> $requestSoapHeadersToScrub
     * @param array<string> $responseHttpHeadersToScrub
     * @param array<string> $responseSoapHeadersToScrub
     */
    public function __construct(
        private array $requestHttpHeadersToScrub,
        private array $requestSoapHeadersToScrub,
        private array $responseHttpHeadersToScrub,
        private array $responseSoapHeadersToScrub,
    ) {
    }

    /**
     * @param string         $serviceName     Name of the service.
     * @param string         $methodName      Name of called method.
     * @param string         $requestHeaders  HTTP headers from request.
     * @param string         $requestBody     SOAP request.
     * @param string         $responseHeaders HTTP headers from response.
     * @param string         $responseBody    SOAP response.
     * @param SoapFault|null $soapFault       A SOAP fault if the request failed.
     *
     * @return array<string, mixed>
     * @psalm-return Context
     */
    public function create(
        string $serviceName,
        string $methodName,
        string $requestHeaders,
        string $requestBody,
        string $responseHeaders,
        string $responseBody,
        ?string $requestId = null,
        ?SoapFault $soapFault = null,
    ): array {
        return [
            'service' => $serviceName,
            'method' => $methodName,
            'request_id' => $requestId,
            'request_headers' => Scrubber::scrubHttpHeaders($requestHeaders, $this->requestHttpHeadersToScrub),
            'request' => Scrubber::scrubSoapHeaders($requestBody, $this->requestSoapHeadersToScrub),
            'response_headers' => Scrubber::scrubHttpHeaders($responseHeaders, $this->responseHttpHeadersToScrub),
            'response' => Scrubber::scrubSoapHeaders($responseBody, $this->responseSoapHeadersToScrub),
            'fault' => $soapFault ? $soapFault->getMessage() : null,
            'failed' => $soapFault !== null,
        ];
    }
}
