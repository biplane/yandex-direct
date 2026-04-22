<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddPassportOrganizationMemberRequest
{
    /** @var string */
    protected $PassportOrganizationLogin;

    /** @var 'ADMIN'|'USER' */
    protected $Role;

    /** @var SendInviteTo */
    protected $SendInviteTo;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get PassportOrganizationLogin
     */
    public function getPassportOrganizationLogin(): string
    {
        return $this->PassportOrganizationLogin;
    }

    /**
     * Set PassportOrganizationLogin
     *
     * @return $this
     */
    public function setPassportOrganizationLogin(string $value)
    {
        $this->PassportOrganizationLogin = $value;

        return $this;
    }

    /**
     * Get Role
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RoleEnum
     *
     * @return 'ADMIN'|'USER'
     */
    public function getRole(): string
    {
        return $this->Role;
    }

    /**
     * Set Role
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RoleEnum
     *
     * @param 'ADMIN'|'USER' $value
     *
     * @return $this
     */
    public function setRole(string $value)
    {
        $this->Role = $value;

        return $this;
    }

    /**
     * Get SendInviteTo
     */
    public function getSendInviteTo(): SendInviteTo
    {
        return $this->SendInviteTo;
    }

    /**
     * Set SendInviteTo
     *
     * @return $this
     */
    public function setSendInviteTo(SendInviteTo $value)
    {
        $this->SendInviteTo = $value;

        return $this;
    }
}
