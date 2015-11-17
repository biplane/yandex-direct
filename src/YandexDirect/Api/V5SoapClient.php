<?php

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * V5SoapClient
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class V5SoapClient extends SoapClient
{
    public function __construct($wsdl, EventDispatcherInterface $dispatcher, User $user, array $options = array())
    {
        $options['stream_context'] = stream_context_create(array(
            'http' => array(
                'header' => $this->createHttpHeaders($user)
            )
        ));

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
        $headers = array(
            'Authorization: Bearer ' . $user->getAccessToken(),
            'Accept-Language: ' . $user->getLocale()
        );

        if ($user->getLogin() !== null) {
            $headers[] = 'Client-Login: ' . $user->getLogin();
        }

        return join("\r\n", $headers);
    }
}
