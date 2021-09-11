<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Representative
{
    protected $Email = null;

    protected $Login = null;

    protected $Role = null;

    /**
     * Creates a new instance of Representative.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Email.
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Role.
     *
     * @see RepresentativeRoleEnum
     */
    public function getRole(): string
    {
        return $this->Role;
    }

    /**
     * Sets Role.
     *
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
