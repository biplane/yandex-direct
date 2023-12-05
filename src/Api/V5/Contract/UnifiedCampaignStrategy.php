<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignStrategy
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

    public function getSearch(): ?UnifiedCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * @return $this
     */
    public function setSearch(?UnifiedCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): ?UnifiedCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * @return $this
     */
    public function setNetwork(?UnifiedCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
