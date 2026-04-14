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
    /** @var string */
    protected $Email;

    /** @var string */
    protected $Login;

    /** @var 'CHIEF'|'DELEGATE'|'LIMITED'|'READONLY'|'UNKNOWN' */
    protected $Role;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Email
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Set Email
     *
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get Role
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum
     *
     * @return 'CHIEF'|'DELEGATE'|'LIMITED'|'READONLY'|'UNKNOWN'
     */
    public function getRole(): string
    {
        return $this->Role;
    }

    /**
     * Set Role
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum
     *
     * @param 'CHIEF'|'DELEGATE'|'LIMITED'|'READONLY'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setRole(string $value)
    {
        $this->Role = $value;

        return $this;
    }
}
