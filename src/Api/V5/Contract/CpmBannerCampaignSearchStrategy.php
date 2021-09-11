<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignSearchStrategy
{
    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of CpmBannerCampaignSearchStrategy.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @see CpmBannerCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @see CpmBannerCampaignSearchStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }
}
