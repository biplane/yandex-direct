<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\ClientInterface as ApiClientInterface;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\DownloadReportException;
use Biplane\YandexDirect\Log\Scrubber;
use Biplane\YandexDirect\Serializer\ReportSerializerInterface;
use Biplane\YandexDirect\Serializer\XmlReportSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RuntimeException;
use Throwable;

use function implode;
use function sleep;
use function sprintf;

class Reports implements ApiClientInterface
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/reports';
    private const RETRY_INTERVAL_DEFAULT = 3;

    /** @var Config */
    private $config;

    /** @var ClientInterface */
    private $httpClient;

    /** @var RequestFactoryInterface */
    private $requestFactory;

    /** @var StreamFactoryInterface */
    private $streamFactory;

    /** @var ReportSerializerInterface */
    private $serializer;

    /** @var RequestInterface */
    private $lastRequest;

    /** @var ResponseInterface */
    private $lastResponse;

    public function __construct(
        Config $config,
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        ?ReportSerializerInterface $serializer = null
    ) {
        $this->config = $config;
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
        $this->serializer = $serializer ?? new XmlReportSerializer();
    }

    /**
     * @throws ApiException
     * @throws ClientExceptionInterface
     * @throws DownloadReportException
     */
    public function get(Reports\ReportRequest $reportRequest): Reports\ReportResult
    {
        return new Reports\ReportResult($this->doRequest($this->createHttpRequest($reportRequest)));
    }

    /**
     * @throws ApiException
     * @throws ClientExceptionInterface
     * @throws DownloadReportException
     */
    public function getReady(Reports\ReportRequest $reportRequest): Reports\ReportResult
    {
        $request = $this->createHttpRequest($reportRequest);

        while (true) {
            $result = new Reports\ReportResult($this->doRequest($request));

            if ($result->isReady()) {
                return $result;
            }

            $delay = $result->retryIn();

            if ($delay === null || $delay < 1) {
                $delay = self::RETRY_INTERVAL_DEFAULT;
            }

            sleep($delay);
        }
    }

    /**
     * Downloads and save report to the specified file.
     *
     * @deprecated Use `Reports\ReportResult::saveToFile()` instead.
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     * @throws DownloadReportException
     * @throws RuntimeException
     */
    public function download(string $destFile, Reports\ReportRequest $reportRequest): void
    {
        $result = $this->getReady($reportRequest);
        $result->saveToFile($destFile);
    }

    public function getRequestId(): string
    {
        if ($this->lastResponse !== null && $this->lastResponse->hasHeader('RequestId')) {
            return $this->lastResponse->getHeaderLine('RequestId');
        }

        return '';
    }

    public function getLastRequest(): string
    {
        if ($this->lastRequest !== null) {
            $request = sprintf(
                "%s %s HTTP/%s\r\n",
                $this->lastRequest->getMethod(),
                $this->lastRequest->getUri()->getPath(),
                $this->lastRequest->getProtocolVersion()
            );

            foreach ($this->lastRequest->getHeaders() as $name => $values) {
                $request .= $name . ': ' . implode(', ', $values) . "\r\n";
            }

            $request = Scrubber::scrubHttpHeaders($request, ['Authorization']);

            $request .= "\r\n";
            $request .= $this->lastRequest->getBody();

            return $request;
        }

        return '';
    }

    public function getLastResponse(): string
    {
        if ($this->lastResponse !== null) {
            $response = sprintf(
                "HTTP/%s %s %s\r\n",
                $this->lastResponse->getProtocolVersion(),
                $this->lastResponse->getStatusCode(),
                $this->lastResponse->getReasonPhrase()
            );

            foreach ($this->lastResponse->getHeaders() as $name => $values) {
                $response .= $name . ': ' . implode(', ', $values) . "\r\n";
            }

            $response .= "\r\n";
            $response .= $this->lastResponse->getBody();

            return $response;
        }

        return '';
    }

    private function createHttpRequest(Reports\ReportRequest $reportRequest): RequestInterface
    {
        $request = $this->requestFactory->createRequest('POST', self::ENDPOINT)
            ->withHeader('Authorization', sprintf('Bearer %s', $this->config->getAccessToken()))
            ->withHeader('Accept-Language', $this->config->getLocale(Config::API_5))
            ->withHeader('Client-Login', $this->config->getClientLogin())
            ->withHeader('processingMode', $reportRequest->processingMode());

        if (! $reportRequest->returnMoneyInMicros()) {
            $request = $request->withHeader('returnMoneyInMicros', 'false');
        }

        if ($reportRequest->skipColumnHeader()) {
            $request = $request->withHeader('skipColumnHeader', 'true');
        }

        if ($reportRequest->skipReportHeader()) {
            $request = $request->withHeader('skipReportHeader', 'true');
        }

        if ($reportRequest->skipReportSummary()) {
            $request = $request->withHeader('skipReportSummary', 'true');
        }

        $stream = $this->streamFactory->createStream(
            $this->serializer->serializeReportDefinition($reportRequest->reportDefinition())
        );

        return $request->withBody($stream);
    }

    /**
     * @throws ApiException
     * @throws ClientExceptionInterface
     * @throws DownloadReportException
     */
    private function doRequest(RequestInterface $request): ResponseInterface
    {
        $response = $this->httpClient->sendRequest($request);

        $this->lastRequest = $request;
        $this->lastResponse = $response;

        if ($response->getStatusCode() >= 400) {
            throw $this->processError($response);
        }

        return $response;
    }

    private function processError(ResponseInterface $response): Throwable
    {
        $apiError = $this->serializer->deserializeApiError((string)$response->getBody());

        if ($apiError !== null) {
            $exception = new ApiException(
                $apiError->errorMessage,
                $apiError->errorCode,
                $apiError->errorDetail
            );
            $exception->setRequestId($apiError->requestId);

            return $exception;
        }

        throw new DownloadReportException(
            sprintf(
                'Could not download report. The server returned a response with status: %d',
                $response->getStatusCode()
            ),
            $response->getStatusCode()
        );
    }
}
