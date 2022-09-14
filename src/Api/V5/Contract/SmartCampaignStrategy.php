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

    public function getSearch(): ?SmartCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * @return $this
     */
    public function setSearch(?SmartCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): ?SmartCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * @return $this
     */
    public function setNetwork(?SmartCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
