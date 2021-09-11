<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategy
{
//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategy.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): ?MobileAppCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(?MobileAppCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): ?MobileAppCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(?MobileAppCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
