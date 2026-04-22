<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordBidSetAutoItem
{
//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $KeywordId;

    /** @var BiddingRule */
    protected $BiddingRule;

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
     * Get CampaignId
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(?int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get AdGroupId
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Set AdGroupId
     *
     * @return $this
     */
    public function setAdGroupId(?int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Get KeywordId
     */
    public function getKeywordId(): ?int
    {
        return $this->KeywordId ?? null;
    }

    /**
     * Set KeywordId
     *
     * @return $this
     */
    public function setKeywordId(?int $value)
    {
        $this->KeywordId = $value;

        return $this;
    }

    /**
     * Get BiddingRule
     */
    public function getBiddingRule(): BiddingRule
    {
        return $this->BiddingRule;
    }

    /**
     * Set BiddingRule
     *
     * @return $this
     */
    public function setBiddingRule(BiddingRule $value)
    {
        $this->BiddingRule = $value;

        return $this;
    }
}
