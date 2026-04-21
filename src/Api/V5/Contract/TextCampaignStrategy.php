<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignStrategy
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
    public static function create()
    {
        return new static();
    }

    /**
     * Get Search
     */
    public function getSearch(): ?TextCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(?TextCampaignSearchStrategy $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): ?TextCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(?TextCampaignNetworkStrategy $value)
    {
        $this->Network = $value;

        return $this;
    }
}
