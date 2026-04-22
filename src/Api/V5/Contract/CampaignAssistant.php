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
//    protected $Manager;

//    Can be omitted.
//    protected $Agency;

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
     * Get Manager
     */
    public function getManager(): ?string
    {
        return $this->Manager ?? null;
    }

    /**
     * Set Manager
     *
     * @return $this
     */
    public function setManager(?string $value)
    {
        $this->Manager = $value;

        return $this;
    }

    /**
     * Get Agency
     */
    public function getAgency(): ?string
    {
        return $this->Agency ?? null;
    }

    /**
     * Set Agency
     *
     * @return $this
     */
    public function setAgency(?string $value)
    {
        $this->Agency = $value;

        return $this;
    }
}
