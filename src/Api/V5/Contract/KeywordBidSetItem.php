<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordBidSetItem
{
//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $KeywordId = null;

//    Can be omitted.
//    protected $SearchBid = null;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto = null;

//    Can be omitted.
//    protected $NetworkBid = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    public function getKeywordId(): ?int
    {
        return $this->KeywordId ?? null;
    }

    /**
     * @return $this
     */
    public function setKeywordId(?int $value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }

    public function getSearchBid(): ?int
    {
        return $this->SearchBid ?? null;
    }

    /**
     * @return $this
     */
    public function setSearchBid(?int $value = null)
    {
        $this->SearchBid = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAutotargetingSearchBidIsAuto(): ?string
    {
        return $this->AutotargetingSearchBidIsAuto ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAutotargetingSearchBidIsAuto(?string $value = null)
    {
        $this->AutotargetingSearchBidIsAuto = $value;

        return $this;
    }

    public function getNetworkBid(): ?int
    {
        return $this->NetworkBid ?? null;
    }

    /**
     * @return $this
     */
    public function setNetworkBid(?int $value = null)
    {
        $this->NetworkBid = $value;

        return $this;
    }

    /**
     * @see PriorityEnum
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
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
