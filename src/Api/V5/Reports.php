<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Report\ReportDefinitionBuilder;
use Biplane\YandexDirect\Api\V5\Report\ReportRequest;
use Biplane\YandexDirect\Api\V5\Report\ReportResult;
use Biplane\YandexDirect\ClientInterface as ApiClientInterface;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\EventDispatcher\SymfonyEventDispatcherAdapter;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\Exception\ReportDefinitionException;
use Biplane\YandexDirect\User;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Reports.
 *
 * @author Denis Vasilev
 */
class Reports implements ApiClientInterface
{
    const ENDPOINT = 'https://api.direct.yandex.com/v5/reports';

    /**
     * @var User
     */
    private $user;

    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var EventDispatcherInterface
     */
    private $dispatcher;

    /**
     * @var RequestInterface
     */
    private $lastRequest;

    /**
     * @var ResponseInterface
     */
    private $lastResponse;

    /**
     * Constructor.
     *
     * @param User                 $user
     * @param ClientInterface|null $httpClient
     */
    public function __construct(User $user, ClientInterface $httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = new Client();
        }

        $this->user = $user;
        $this->httpClient = $httpClient;
        $this->dispatcher = new SymfonyEventDispatcherAdapter($user->getEventDispatcher());
    }

    /**
     * Gets a report result.
     *
     * The status can be ready or pending.
     *
     * @param ReportRequest $reportRequest The report request
     *
     * @return ReportResult
     *
     * @throws ApiException
     * @throws NetworkException
     * @throws ReportDefinitionException
     */
    public function get(ReportRequest $reportRequest)
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
     * @return ReportResult
     *
     * @throws ApiException
     * @throws NetworkException
     * @throws ReportDefinitionException
     */
    public function getReady(ReportRequest $reportRequest, $retryInterval = null)
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
     * @throws \Exception
     */
    public function download($reportFile, ReportRequest $reportRequest, $retryInterval = null)
    {
        try {
            $this->waitReady($reportRequest, $retryInterval ?: 0, [
                RequestOptions::SINK => $reportFile,
            ]);
        } catch (\Exception $ex) {
            if (is_file($reportFile) && is_writable($reportFile)) {
                if (false !== $fh = fopen($reportFile, 'w')) {
                    ftruncate($fh, 0);
                    fclose($fh);
                }
            }

            throw $ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestId()
    {
        if (null !== $this->lastResponse && $this->lastResponse->hasHeader('RequestId')) {
            return $this->lastResponse->getHeaderLine('RequestId');
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRequest()
    {
        if (null !== $this->lastRequest) {
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
            $request .= (string)$this->lastRequest->getBody();

            return $request;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastResponse()
    {
        if (null !== $this->lastResponse) {
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
            $response .= (string)$this->lastResponse->getBody();

            return $response;
        }

        return null;
    }

    /**
     * @param ReportRequest $reportRequest
     * @param array         $options
     *
     * @return ResponseInterface
     */
    private function request(ReportRequest $reportRequest, array $options = [])
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
            $this->user->resolveWsdl(self::ENDPOINT),
            $this->buildRequestHeaders($reportRequest),
            $reportDefinition
        );
        $invoker = $this->user->getInvoker();

        return $invoker(function () use ($request, $options, $reportRequest) {
            $this->lastRequest = $request;

            $event = new PreCallEvent('Reports:request', [$reportRequest], $this->user);
            $this->dispatcher->dispatch(Events::BEFORE_REQUEST, $event);

            $response = $this->httpClient->send($request, $options + [
                RequestOptions::HTTP_ERRORS => false,
            ]);
            $this->lastResponse = $response;

            if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 202) {
                $event = new PostCallEvent(
                    'Reports:request',
                    [$reportRequest],
                    $this->user,
                    $this,
                    $response->getBody()
                );
                $this->dispatcher->dispatch(Events::AFTER_REQUEST, $event);

                return $response;
            }

            $exception = $this->createException($response);

            $event = new FailCallEvent('Reports:request', [$reportRequest], $this->user, $this, $exception);
            $this->dispatcher->dispatch(Events::FAIL_REQUEST, $event);

            throw $exception;
        });
    }

    private function waitReady(ReportRequest $reportRequest, $retryInterval, array $options = [])
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

    private function createException(ResponseInterface $response)
    {
        $content = (string)$response->getBody();

        if (false !== strpos($content, '<reports:reportDownloadError')) {
            $doc = new \DOMDocument();

            if ($doc->loadXML($content)) {
                $xpath = new \DOMXPath($doc);
                $xpath->registerNamespace('r', ReportDefinitionBuilder::XML_NAMESPACE);
                $requestId = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:requestId)');
                $errorCode = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorCode)');
                $errorMessage = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorMessage)');
                $errorDetail = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorDetail)');

                return new ApiException(
                    'Reports:request',
                    $errorDetail ?: $errorMessage,
                    (int)$errorCode,
                    null,
                    $requestId
                );
            }
        }

        return new NetworkException(
            "Could not download report, server's response: " . $content,
            $response->getStatusCode()
        );
    }

    private function buildRequestHeaders(ReportRequest $reportRequest)
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
