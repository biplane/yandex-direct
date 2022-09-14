<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignStrategy
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

    public function getSearch(): ?DynamicTextCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * @return $this
     */
    public function setSearch(?DynamicTextCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): ?DynamicTextCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * @return $this
     */
    public function setNetwork(?DynamicTextCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
