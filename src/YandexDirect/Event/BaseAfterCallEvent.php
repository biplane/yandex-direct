<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;

/**
 * BaseAfterCallEvent
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class BaseAfterCallEvent extends PreCallEvent
{
    private $requestId;

    /**
     * Constructor.
     *
     * @param string $methodName The method name of API
     * @param array  $params     The params for method of API
     * @param User   $user       The user
     * @param string $requestId  The request identifer
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($methodName, array $params, User $user, $requestId)
    {
        parent::__construct($methodName, $params, $user);

        if (empty($requestId)) {
            throw new \InvalidArgumentException('Request ID cannot be empty.');
        }

        $this->requestId = $requestId;
    }

    /**
     * Gets the request identifier.
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
}
