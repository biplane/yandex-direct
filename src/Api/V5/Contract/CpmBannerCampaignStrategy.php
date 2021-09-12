<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignStrategy
{
//    Can be omitted.
//    protected $Search = null;

//    Can be omitted.
//    protected $Network = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSearch(): ?CpmBannerCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * @return $this
     */
    public function setSearch(?CpmBannerCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): ?CpmBannerCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * @return $this
     */
    public function setNetwork(?CpmBannerCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
