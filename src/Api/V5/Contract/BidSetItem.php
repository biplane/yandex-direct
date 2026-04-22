<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidSetItem
{
//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $KeywordId;

//    Can be omitted.
//    protected $Bid;

//    Can be omitted.
//    protected $ContextBid;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto;

//    Can be omitted.
//    protected $StrategyPriority;

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
     * Get Bid
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(?int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get ContextBid
     */
    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * Set ContextBid
     *
     * @return $this
     */
    public function setContextBid(?int $value)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Get AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAutotargetingSearchBidIsAuto(): ?string
    {
        return $this->AutotargetingSearchBidIsAuto ?? null;
    }

    /**
     * Set AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAutotargetingSearchBidIsAuto(?string $value)
    {
        $this->AutotargetingSearchBidIsAuto = $value;

        return $this;
    }

    /**
     * Get StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @return 'LOW'|'NORMAL'|'HIGH'|null
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * Set StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @param 'LOW'|'NORMAL'|'HIGH'|null $value
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value)
    {
        $this->StrategyPriority = $value;

        return $this;
    }
}
