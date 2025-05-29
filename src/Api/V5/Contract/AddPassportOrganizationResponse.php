<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddPassportOrganizationResponse extends ActionResultBase
{
//    Can be omitted.
//    protected $Login = null;

//    Can be omitted.
//    protected $ClientId = null;

    public function getLogin(): ?string
    {
        return $this->Login ?? null;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }
}
