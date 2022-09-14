<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Representative
{
    protected $Email = null;

    protected $Login = null;

    protected $Role = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * @see RepresentativeRoleEnum
     */
    public function getRole(): string
    {
        return $this->Role;
    }

    /**
     * @see RepresentativeRoleEnum
     *
     * @return $this
     */
    public function setRole(string $value)
    {
        $this->Role = $value;

        return $this;
    }
}
