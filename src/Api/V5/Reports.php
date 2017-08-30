<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Report\ReportDefinitionBuilder;
use Biplane\YandexDirect\Api\V5\Report\ReportResult;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\User;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Reports.
 *
 * @author Denis Vasilev
 */
class Reports
{
    const ENDPOINT = 'https://api.direct.yandex.com/v5/reports';

    private $user;
    private $httpClient;
    private $optionsResolver;

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
        $this->optionsResolver = new OptionsResolver();

        $this->optionsResolver->setDefaults([
            'processing_mode' => 'auto',
            'return_money_in_micros' => true,
            'skip_report_header' => false,
            'skip_column_header' => false,
            'skip_report_summary' => false,
        ]);

        // OptionsResolver 2.6+
        if (method_exists($this->optionsResolver, 'setNormalizer')) {
            $this->optionsResolver
                ->setAllowedValues('processing_mode', ['auto', 'online', 'offline'])
                ->setAllowedTypes('return_money_in_micros', 'bool')
                ->setAllowedTypes('skip_report_header', 'bool')
                ->setAllowedTypes('skip_column_header', 'bool')
                ->setAllowedTypes('skip_report_summary', 'bool');
        } else {
            $this->optionsResolver
                ->setAllowedValues([
                    'processing_mode', ['auto', 'online', 'offline'],
                ])
                ->setAllowedTypes([
                    'return_money_in_micros' => ['bool'],
                    'skip_report_header' => ['bool'],
                    'skip_column_header' => ['bool'],
                    'skip_report_summary' => ['bool'],
                ]);
        }
    }

    /**
     * Gets a report result.
     *
     * The status can be ready or pending.
     *
     * @param ReportDefinitionBuilder|string $reportDefinition The report definition
     * @param array                          $options {
     *     @var string $processing_mode        One of auto, online or offline
     *     @var bool   $return_money_in_micros Default true
     *     @var bool   $skip_report_header     Default false
     *     @var bool   $skip_report_summary    Default false
     *     @var bool   $skip_column_header     Default false
     * }
     *
     * @return ReportResult
     *
     * @throws ApiException
     * @throws NetworkException
     */
    public function get($reportDefinition, array $options = [])
    {
        $requestOptions = $this->buildRequestOptions($reportDefinition, $options);
        $response = $this->request($requestOptions);

        return new ReportResult($response);
    }

    /**
     * Gets a report result.
     *
     * The script will be wait while report will not be ready.
     *
     * @param ReportDefinitionBuilder|string $reportDefinition The report definition
     * @param array                          $options {
     *     @var string $processing_mode        One of auto, online or offline
     *     @var bool   $return_money_in_micros Default true
     *     @var bool   $skip_report_header     Default false
     *     @var bool   $skip_report_summary    Default false
     *     @var bool   $skip_column_header     Default false
     * }
     *
     * @param int|null                       $retryInterval An amount of delay between requests, in seconds
     *
     * @return ReportResult
     *
     * @throws ApiException
     * @throws NetworkException
     */
    public function getReady($reportDefinition, array $options = [], $retryInterval = null)
    {
        $requestOptions = $this->buildRequestOptions($reportDefinition, $options);
        $response = $this->waitReady($requestOptions, $retryInterval ?: 0);

        return new ReportResult($response);
    }

    /**
     * Downloads and save report to the specified file.
     *
     * @param string                         $reportFile The path to report file
     * @param ReportDefinitionBuilder|string $reportDefinition The report definition
     * @param array                          $options {
     *     @var string $processing_mode        One of auto, online or offline
     *     @var bool   $return_money_in_micros Default true
     *     @var bool   $skip_report_header     Default false
     *     @var bool   $skip_report_summary    Default false
     *     @var bool   $skip_column_header     Default false
     * }
     * @param int|null                       $retryInterval An amount of delay between requests, in seconds
     *
     * @throws ApiException
     * @throws NetworkException
     * @throws \Exception
     */
    public function download($reportFile, $reportDefinition, array $options = [], $retryInterval = null)
    {
        $requestOptions = $this->buildRequestOptions($reportDefinition, $options);
        $requestOptions[RequestOptions::SINK] = $reportFile;

        try {
            $this->waitReady($requestOptions, $retryInterval ?: 0);
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

    private function request(array $requestOptions)
    {
        $response = $this->httpClient->post(self::ENDPOINT, $requestOptions);

        if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 202) {
            return $response;
        }

        throw $this->createException($response);
    }

    private function waitReady(array $requestOptions, $retryInterval)
    {
        while (true) {
            $response = $this->request($requestOptions);

            if ($response->getStatusCode() === 200) {
                return $response;
            }

            if ($retryInterval > 0) {
                $delay = $retryInterval;
            } elseif ($response->hasHeader('retryIn')) {
                $delay = (int)$response->getHeader('retryIn')[0];
            } else {
                $delay = 1;
            }

            sleep($delay);
        }
    }

    private function createException(ResponseInterface $response)
    {
        if ($response->getStatusCode() === 400) {
            $doc = new \DOMDocument();

            if ($doc->loadXML((string)$response->getBody())) {
                $xpath = new \DOMXPath($doc);
                $xpath->registerNamespace('r', ReportDefinitionBuilder::XML_NAMESPACE);
                $requestId = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:requestId)');
                $errorCode = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorCode)');
                $errorMessage = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorMessage)');
                $errorDetail = $xpath->evaluate('string(/r:reportDownloadError/r:ApiError/r:errorDetail)');

                return new ApiException(
                    'Reports:get',
                    $errorDetail ?: $errorMessage,
                    (int)$errorCode,
                    null,
                    $requestId
                );
            }
        }

        return new NetworkException(
            "Could not download report, server's response: " . $response->getBody(),
            $response->getStatusCode()
        );
    }

    private function buildRequestOptions($reportDefinition, array $reportOptions)
    {
        if ($reportDefinition instanceof Report\ReportDefinitionBuilder) {
            $reportDefinition = $reportDefinition->build();
        }

        $options = $this->optionsResolver->resolve($reportOptions);

        $headers = [
            'Authorization' => sprintf('Bearer %s', $this->user->getAccessToken()),
            'Accept-Language' => $this->user->getLocale(),
            'Client-Login' => $this->user->getLogin(),
            'processingMode' => $options['processing_mode'],
        ];

        if (!$options['return_money_in_micros']) {
            $headers['returnMoneyInMicros'] = 'false';
        }

        if ($options['skip_report_header']) {
            $headers['skipReportHeader'] = 'true';
        }

        if ($options['skip_column_header']) {
            $headers['skipColumnHeader'] = 'true';
        }

        if ($options['skip_report_summary']) {
            $headers['skipReportSummary'] = 'true';
        }

        return [
            RequestOptions::BODY => $reportDefinition,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => $headers,
        ];
    }
}
