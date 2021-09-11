<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidSetItem
{
//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $KeywordId = null;

//    Can be omit.
//    protected $SearchBid = null;

//    Can be omit.
//    protected $NetworkBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

    /**
     * Creates a new instance of KeywordBidSetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets KeywordId.
     */
    public function getKeywordId(): ?int
    {
        return $this->KeywordId ?? null;
    }

    /**
     * Sets KeywordId.
     *
     * @return $this
     */
    public function setKeywordId(?int $value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }

    /**
     * Gets SearchBid.
     */
    public function getSearchBid(): ?int
    {
        return $this->SearchBid ?? null;
    }

    /**
     * Sets SearchBid.
     *
     * @return $this
     */
    public function setSearchBid(?int $value = null)
    {
        $this->SearchBid = $value;

        return $this;
    }

    /**
     * Gets NetworkBid.
     */
    public function getNetworkBid(): ?int
    {
        return $this->NetworkBid ?? null;
    }

    /**
     * Sets NetworkBid.
     *
     * @return $this
     */
    public function setNetworkBid(?int $value = null)
    {
        $this->NetworkBid = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @see PriorityEnum
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * Sets StrategyPriority.
     *
     * @see PriorityEnum
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }
}
