<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;
use Throwable;

class ApiSoapClientV5 extends ApiSoapClient
{
    private const GENERAL_NS = 'http://api.direct.yandex.com/v5/general';

    public function __construct(?string $wsdl, Config $config, array $options = [])
    {
        $options['stream_context'] = createStreamContext(
            [
                'header' => self::createHttpHeaders($config),
            ],
            $options['stream_context'] ?? null
        );

        $typemap = $options['typemap'] ?? [];

        array_unshift($typemap, [
            'type_ns' => self::GENERAL_NS,
            'type_name' => 'ArrayOfString',
            'from_xml' => __NAMESPACE__ . '\\parseArrayOfString',
        ]);
        array_unshift($typemap, [
            'type_ns' => self::GENERAL_NS,
            'type_name' => 'ArrayOfInteger',
            'from_xml' => __NAMESPACE__ . '\\parseArrayOfInt',
        ]);
        array_unshift($typemap, [
            'type_ns' => self::GENERAL_NS,
            'type_name' => 'ArrayOfLong',
            'from_xml' => __NAMESPACE__ . '\\parseArrayOfLong',
        ]);

        $options['typemap'] = $typemap;

        parent::__construct($wsdl, $config, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestId()
    {
        $headers = $this->__getLastResponseHeaders();

        if ($headers !== '' && preg_match('/^RequestId: ([a-z\d]+)(\r|)$/im', $headers, $m)) {
            return $m[1];
        }

        return '';
    }

    /**
     * Gets info about units for the last request.
     *
     * @see https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#units
     *
     * @return Units
     */
    public function getUnits(): Units
    {
        $headers = $this->__getLastResponseHeaders();

        if ($headers !== '' && preg_match('@^Units: (\d+)/(\d+)/(\d+)@m', $headers, $m)) {
            return new Units($m[1], $m[2], $m[3]);
        }

        return new Units(-1, -1, -1);
    }

    /**
     * {@inheritDoc}
     */
    protected function handleSoapFault(SoapFault $fault): ?Throwable
    {
        $detail = property_exists($fault, 'detail') ? $fault->detail : null;

        if (is_object($detail) && property_exists($detail, 'FaultResponse')) {
            $exception = new ApiException(
                property_exists($fault, 'faultstring') ? $fault->faultstring : $fault->getMessage(),
                (int)$detail->FaultResponse->errorCode,
                $detail->FaultResponse->errorDetail,
                $fault
            );
            $exception->setRequestId($detail->FaultResponse->requestId);

            return $exception;
        }

        return null;
    }

    /**
     * @param Config $config
     *
     * @return array<string>
     */
    private static function createHttpHeaders(Config $config): array
    {
        $headers = [
            'Authorization: Bearer ' . $config->getAccessToken(),
            'Accept-Language: ' . $config->getLocale(Config::API_5),
        ];

        if ($config->getClientLogin() !== null) {
            $headers[] = 'Client-Login: ' . $config->getClientLogin();
        }

        if ($config->useOperatorUnits()) {
            $headers[] = 'Use-Operator-Units: true';
        }

        return $headers;
    }
}
