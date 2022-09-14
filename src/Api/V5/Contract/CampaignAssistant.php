<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignAssistant
{
//    Can be omitted.
//    protected $Manager = null;

//    Can be omitted.
//    protected $Agency = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getManager(): ?string
    {
        return $this->Manager ?? null;
    }

    /**
     * @return $this
     */
    public function setManager(?string $value = null)
    {
        $this->Manager = $value;

        return $this;
    }

    public function getAgency(): ?string
    {
        return $this->Agency ?? null;
    }

    /**
     * @return $this
     */
    public function setAgency(?string $value = null)
    {
        $this->Agency = $value;

        return $this;
    }
}
