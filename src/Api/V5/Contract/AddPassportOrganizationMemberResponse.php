<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddPassportOrganizationMemberResponse extends ActionResultBase
{
//    Can be omitted.
//    protected $PassportOrganizationLogin = null;

    public function getPassportOrganizationLogin(): ?string
    {
        return $this->PassportOrganizationLogin ?? null;
    }

    /**
     * @return $this
     */
    public function setPassportOrganizationLogin(?string $value = null)
    {
        $this->PassportOrganizationLogin = $value;

        return $this;
    }
}
