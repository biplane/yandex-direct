<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;

use function strpos;
use function substr;

/**
 * @deprecated Will be removed in 6.0, without replacements
 */
class PreCallEvent
{
    /** @var string */
    private $methodRef;

    /** @var array<mixed> */
    private $params;

    /** @var User */
    private $user;

    /**
     * @param string       $methodRef The fullname of API method
     * @param array<mixed> $params    The params for method of API
     * @param User         $user      The user
     */
    public function __construct(string $methodRef, array $params, User $user)
    {
        $this->methodRef = $methodRef;
        $this->params = $params;
        $this->user = $user;
    }

    /**
     * Gets the method name of API.
     */
    public function getMethodName(): ?string
    {
        $pos = strpos($this->methodRef, ':');

        if ($pos !== false) {
            return substr($this->methodRef, $pos + 1);
        }

        return null;
    }

    /**
     * Gets the fullname of API method.
     *
     * Returns string in format {ServiceName}:{MethodName}
     * Where, {ServiceName} - local class name of proxy
     *  {MethodName} - the name of API method
     */
    public function getMethodRef(): string
    {
        return $this->methodRef;
    }

    /**
     * Gets an array of parameters for method of API.
     *
     * @return array<mixed>
     */
    public function getMethodParams(): array
    {
        return $this->params;
    }

    /**
     * Gets the user.
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
