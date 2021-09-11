<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Report\ReportDefinitionBuilder;
use Biplane\YandexDirect\Api\V5\Report\ReportRequest;
use Biplane\YandexDirect\Api\V5\Report\ReportResult;
use Biplane\YandexDirect\ClientInterface as ApiClientInterface;
use Biplane\YandexDirect\Event\EventEmitter;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\Exception\ReportDefinitionException;
use Biplane\YandexDirect\User;
use DOMDocument;
use DOMXPath;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Throwable;

use function fclose;
use function fopen;
use function ftruncate;
use function implode;
use function is_file;
use function is_writable;
use function max;
use function sleep;
use function sprintf;
use function strpos;

class Reports implements ApiClientInterface
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/reports';

    /** @var User */
    private $user;

    /** @var ClientInterface */
    private $httpClient;

    /** @var EventEmitter */
    private $emitter;

    /** @var RequestInterface */
    private $lastRequest;

    /** @var ResponseInterface */
    private $lastResponse;

    public function __construct(User $user, ?ClientInterface $httpClient = null)
    {
        if ($httpClient === null) {
            $httpClient = new Client();
        }

        $this->user = $user;
        $this->httpClient = $httpClient;
        $this->emitter = new EventEmitter($user->getEventDispatcher(), $user);
    }

    /**
     * Gets a report result.
     *
     * The status can be ready or pending.
     *
     * @param ReportRequest $reportRequest The report request
     *
     * @throws ApiException
     * @throws NetworkException
     * @throws ReportDefinitionException
     */
    public function get(ReportRequest $reportRequest): ReportResult
    {
        $response = $this->request($reportRequest);

        return new ReportResult($response);
    }

    /**
     * Gets a report result.
     *
     * The script will be wait while report will not be ready.
     *
     * @param ReportRequest $reportRequest The report request
     * @param int|null      $retryInterval An amount of delay between requests, in seconds
     *
     * @throws ApiException
     * @throws NetworkException
     * @throws ReportDefinitionException
     */
    public function getReady(ReportRequest $reportRequest, ?int $retryInterval = null): ReportResult
    {
        return $this->waitReady($reportRequest, $retryInterval ?: 0);
    }

    /**
     * Downloads and save report to the specified file.
     *
     * @param string        $reportFile    The path to report file
     * @param ReportRequest $reportRequest The report request
     * @param int|null      $retryInterval An amount of delay between requests, in seconds
     *
     * @throws ApiException
     * @throws NetworkException
     * @throws ReportDefinitionException
     * @throws Throwable
     */
    public function download(string $reportFile, ReportRequest $reportRequest, ?int $retryInterval = null): void
    {
        try {
            $this->waitReady($reportRequest, $retryInterval ?: 0, [RequestOptions::SINK => $reportFile]);
        } catch (Throwable $ex) {
            if (is_file($reportFile) && is_writable($reportFile)) {
                $fh = fopen($reportFile, 'wb');

                if ($fh !== false) {
                    ftruncate($fh, 0);
                    fclose($fh);
                }
            }

            throw $ex;
        }
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

    /**
     * @param array<string, mixed> $options
     */
    private function request(ReportRequest $reportRequest, array $options = []): ResponseInterface
    {
        $reportDefinition = $reportRequest->getDefinition();

        if (empty($reportDefinition)) {
            throw new ReportDefinitionException(sprintf(
                'The report definition cannot be empty. Was expected XML document. You can build it with builder %s.',
                ReportDefinitionBuilder::class
            ));
        }

        $request = new Request(
            'POST',
            self::ENDPOINT,
            $this->buildRequestHeaders($reportRequest),
            $reportDefinition
        );

        $this->lastRequest = $request;

        $this->emitter->emitBeforeRequestEvent($this, 'request', [$reportRequest]);

        $response = $this->httpClient->send($request, $options + [RequestOptions::HTTP_ERRORS => false]);
        $this->lastResponse = $response;

        if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 202) {
            $this->emitter->emitAfterRequestEvent($this, 'request', [$reportRequest], $response->getBody());

            return $response;
        }

        $exception = $this->createException($response);

        $this->emitter->emitFailRequestEvent($this, 'request', [$reportRequest], $exception);

        throw $exception;
    }

    /**
     * @param array<string, mixed> $options
     */
    private function waitReady(ReportRequest $reportRequest, int $retryInterval, array $options = []): ReportResult
    {
        while (true) {
            $result = new ReportResult($this->request($reportRequest, $options));

            if ($result->isReady()) {
                return $result;
            }

            $delay = max(1, $retryInterval > 0 ? $retryInterval : $result->retryIn());
            sleep($delay);
        }
    }

    private function createException(ResponseInterface $response): Throwable
    {
        $content = (string)$response->getBody();

        if (strpos($content, '<reports:reportDownloadError') !== false) {
            $doc = new DOMDocument();

            if ($doc->loadXML($content)) {
                $xpath = new DOMXPath($doc);
                $xpath->registerNamespace('r', ReportDefinitionBuilder::XML_NAMESPACE);
                $requestId = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:requestId)');
                $errorCode = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorCode)');
                $errorMessage = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorMessage)');
                $errorDetail = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorDetail)');

                $exception = new ApiException($errorMessage, (int)$errorCode, $errorDetail);
                $exception->setRequestId($requestId);

                return $exception;
            }
        }

        return new NetworkException(
            "Could not download report, server's response: " . $content,
            $response->getStatusCode()
        );
    }

    /**
     * @return array<string, string>
     */
    private function buildRequestHeaders(ReportRequest $reportRequest): array
    {
        $headers = [
            'Authorization' => sprintf('Bearer %s', $this->user->getAccessToken()),
            'Accept-Language' => $this->user->getLocale(),
            'Client-Login' => $this->user->getLogin(),
            'processingMode' => $reportRequest->getProcessingMode(),
        ];

        if ($reportRequest->getReturnMoneyFormat() !== ReportRequest::RETURN_MONEY_FORMAT_MICROS) {
            $headers['returnMoneyInMicros'] = 'false';
        }

        if ($reportRequest->isSkipReportHeader()) {
            $headers['skipReportHeader'] = 'true';
        }

        if ($reportRequest->isSkipColumnHeader()) {
            $headers['skipColumnHeader'] = 'true';
        }

        if ($reportRequest->isSkipReportSummary()) {
            $headers['skipReportSummary'] = 'true';
        }

        return $headers;
    }
}
