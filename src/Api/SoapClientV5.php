<?php

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * SoapClientV5.
 *
 * @author Denis Vasilev
 */
class SoapClientV5 extends SoapClient
{
    const GENERAL_NS = 'http://api.direct.yandex.com/v5/general';

    public function __construct($wsdl, EventDispatcherInterface $dispatcher, User $user, array $options = [])
    {
        $options['stream_context'] = stream_context_create([
            'http' => [
                'header' => $this->createHttpHeaders($user),
            ],
        ]);

        $typemap = isset($options['typemap']) ? $options['typemap'] : [];

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

        parent::__construct($wsdl, $dispatcher, $user, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestId()
    {
        $headers = $this->__getLastResponseHeaders();

        if (!empty($headers) && preg_match('/^RequestId: ([a-z\d]+)(\r|)$/im', $headers, $m)) {
            return $m[1];
        }

        return null;
    }

    /**
     * Gets info about units for the last request.
     *
     * @see https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#units
     *
     * @return Units
     */
    public function getUnits()
    {
        $headers = $this->__getLastResponseHeaders();

        if (!empty($headers) && preg_match('@^Units: (\d+)/(\d+)/(\d+)@m', $headers, $m)) {
            return new Units($m[1], $m[2], $m[3]);
        }

        return new Units(-1, -1, -1);
    }

    /**
     * {@inheritdoc}
     */
    protected function handleFault(\SoapFault $fault, $methodRef, array $params)
    {
        $detail = property_exists($fault, 'detail') ? $fault->detail : null;

        if (is_object($detail) && property_exists($detail, 'FaultResponse')) {
            return new ApiException(
                $methodRef,
                $detail->FaultResponse->errorDetail ?: $fault->getMessage(),
                $detail->FaultResponse->errorCode,
                $fault,
                $this->getRequestId()
            );
        }

        return new ApiException($methodRef, $fault->getMessage(), 0, $fault, $this->getRequestId());
    }

    /**
     * {@inheritdoc}
     */
    protected function fetchUtits()
    {
        return $this->getUnits();
    }

    private function createHttpHeaders(User $user)
    {
        $headers = [
            'Authorization: Bearer ' . $user->getAccessToken(),
            'Accept-Language: ' . $user->getLocale(),
        ];

        if ($user->getLogin() !== null) {
            $headers[] = 'Client-Login: ' . $user->getLogin();
        }

        if ($user->useOperatorUnits()) {
            $headers[] = 'Use-Operator-Units: true';
        }

        return implode("\r\n", $headers);
    }
}
