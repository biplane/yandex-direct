<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignStrategy
{
//    Can be omitted.
//    protected $Search;

//    Can be omitted.
//    protected $Network;

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
     * Get Search
     */
    public function getSearch(): ?SmartCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(?SmartCampaignSearchStrategy $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): ?SmartCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(?SmartCampaignNetworkStrategy $value)
    {
        $this->Network = $value;

        return $this;
    }
}
