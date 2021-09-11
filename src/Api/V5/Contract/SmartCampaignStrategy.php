<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategy
{
//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of SmartCampaignStrategy.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): ?SmartCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(?SmartCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): ?SmartCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(?SmartCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
