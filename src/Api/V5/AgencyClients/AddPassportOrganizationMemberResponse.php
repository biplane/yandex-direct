<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AgencyClients;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\ActionResultBase;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddPassportOrganizationMemberResponse extends ActionResultBase
{
//    Can be omitted.
//    protected $PassportOrganizationLogin;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get PassportOrganizationLogin
     */
    public function getPassportOrganizationLogin(): ?string
    {
        return $this->PassportOrganizationLogin ?? null;
    }

    /**
     * Set PassportOrganizationLogin
     *
     * @return $this
     */
    public function setPassportOrganizationLogin(?string $value)
    {
        $this->PassportOrganizationLogin = $value;

        return $this;
    }
}
