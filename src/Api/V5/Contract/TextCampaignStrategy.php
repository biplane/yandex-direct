<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignStrategy
{
//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of TextCampaignStrategy.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Search.
     */
    public function getSearch(): ?TextCampaignSearchStrategy
    {
        return $this->Search ?? null;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(?TextCampaignSearchStrategy $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): ?TextCampaignNetworkStrategy
    {
        return $this->Network ?? null;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(?TextCampaignNetworkStrategy $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
