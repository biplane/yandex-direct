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
    public function __construct($wsdl, EventDispatcherInterface $dispatcher, User $user, array $options = [])
    {
        $options['stream_context'] = stream_context_create([
            'http' => [
                'header' => $this->createHttpHeaders($user),
            ],
        ]);

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

    private function createHttpHeaders(User $user)
    {
        $headers = [
            'Authorization: Bearer ' . $user->getAccessToken(),
            'Accept-Language: ' . $user->getLocale(),
        ];

        if ($user->getLogin() !== null) {
            $headers[] = 'Client-Login: ' . $user->getLogin();
        }

        return implode("\r\n", $headers);
    }
}
