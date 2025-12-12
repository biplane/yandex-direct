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
    protected $PassportOrganizationLogin = null;

    protected $Role = null;

    protected $SendInviteTo = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPassportOrganizationLogin(): string
    {
        return $this->PassportOrganizationLogin;
    }

    /**
     * @return $this
     */
    public function setPassportOrganizationLogin(string $value)
    {
        $this->PassportOrganizationLogin = $value;

        return $this;
    }

    /**
     * @see RoleEnum
     */
    public function getRole(): string
    {
        return $this->Role;
    }

    /**
     * @see RoleEnum
     *
     * @return $this
     */
    public function setRole(string $value)
    {
        $this->Role = $value;

        return $this;
    }

    public function getSendInviteTo(): SendInviteTo
    {
        return $this->SendInviteTo;
    }

    /**
     * @return $this
     */
    public function setSendInviteTo(SendInviteTo $value)
    {
        $this->SendInviteTo = $value;

        return $this;
    }
}
