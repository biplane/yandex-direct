<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordGetItem
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Keyword;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $Bid;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto;

//    Can be omitted.
//    protected $ContextBid;

//    Can be omitted.
//    protected $StrategyPriority;

//    Can be omitted.
//    protected $State;

//    Can be omitted.
//    protected $Status;

//    Can be omitted.
//    protected $UserParam1;

//    Can be omitted.
//    protected $UserParam2;

//    Can be omitted.
//    protected $Productivity;

//    Can be omitted.
//    protected $StatisticsSearch;

//    Can be omitted.
//    protected $StatisticsNetwork;

//    Can be omitted.
//    protected $ServingStatus;

//    Can be omitted.
//    protected $AutotargetingCategories;

//    Can be omitted.
//    protected $AutotargetingBrandOptions;

//    Can be omitted.
//    protected $AutotargetingSettings;

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
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Keyword
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * Set Keyword
     *
     * @return $this
     */
    public function setKeyword(?string $value)
    {
        $this->Keyword = $value;

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

    /**
     * Get State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @return 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Set State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @param 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setState(?string $value)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get UserParam1
     */
    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * Set UserParam1
     *
     * @return $this
     */
    public function setUserParam1(?string $value)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Get UserParam2
     */
    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * Set UserParam2
     *
     * @return $this
     */
    public function setUserParam2(?string $value)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    /**
     * Get Productivity
     */
    public function getProductivity(): ?KeywordProductivity
    {
        return $this->Productivity ?? null;
    }

    /**
     * Set Productivity
     *
     * @return $this
     */
    public function setProductivity(?KeywordProductivity $value)
    {
        $this->Productivity = $value;

        return $this;
    }

    /**
     * Get StatisticsSearch
     */
    public function getStatisticsSearch(): ?Statistics
    {
        return $this->StatisticsSearch ?? null;
    }

    /**
     * Set StatisticsSearch
     *
     * @return $this
     */
    public function setStatisticsSearch(?Statistics $value)
    {
        $this->StatisticsSearch = $value;

        return $this;
    }

    /**
     * Get StatisticsNetwork
     */
    public function getStatisticsNetwork(): ?Statistics
    {
        return $this->StatisticsNetwork ?? null;
    }

    /**
     * Set StatisticsNetwork
     *
     * @return $this
     */
    public function setStatisticsNetwork(?Statistics $value)
    {
        $this->StatisticsNetwork = $value;

        return $this;
    }

    /**
     * Get ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @return 'ELIGIBLE'|'RARELY_SERVED'|null
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Set ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @param 'ELIGIBLE'|'RARELY_SERVED'|null $value
     *
     * @return $this
     */
    public function setServingStatus(?string $value)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    /**
     * Get AutotargetingCategories
     */
    public function getAutotargetingCategories(): ?AutotargetingCategoryArray
    {
        return $this->AutotargetingCategories ?? null;
    }

    /**
     * Set AutotargetingCategories
     *
     * @return $this
     */
    public function setAutotargetingCategories(?AutotargetingCategoryArray $value)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    /**
     * Get AutotargetingBrandOptions
     */
    public function getAutotargetingBrandOptions(): ?AutotargetingBrandOptionArray
    {
        return $this->AutotargetingBrandOptions ?? null;
    }

    /**
     * Set AutotargetingBrandOptions
     *
     * @return $this
     */
    public function setAutotargetingBrandOptions(?AutotargetingBrandOptionArray $value)
    {
        $this->AutotargetingBrandOptions = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettings
     */
    public function getAutotargetingSettings(): ?AutotargetingSettings
    {
        return $this->AutotargetingSettings ?? null;
    }

    /**
     * Set AutotargetingSettings
     *
     * @return $this
     */
    public function setAutotargetingSettings(?AutotargetingSettings $value)
    {
        $this->AutotargetingSettings = $value;

        return $this;
    }
}
