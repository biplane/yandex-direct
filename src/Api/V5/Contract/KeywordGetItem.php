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
//    protected $Id = null;

//    Can be omitted.
//    protected $Keyword = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $Bid = null;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto = null;

//    Can be omitted.
//    protected $ContextBid = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

//    Can be omitted.
//    protected $State = null;

//    Can be omitted.
//    protected $Status = null;

//    Can be omitted.
//    protected $UserParam1 = null;

//    Can be omitted.
//    protected $UserParam2 = null;

//    Can be omitted.
//    protected $Productivity = null;

//    Can be omitted.
//    protected $StatisticsSearch = null;

//    Can be omitted.
//    protected $StatisticsNetwork = null;

//    Can be omitted.
//    protected $ServingStatus = null;

//    Can be omitted.
//    protected $AutotargetingCategories = null;

//    Can be omitted.
//    protected $AutotargetingBrandOptions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * @return $this
     */
    public function setKeyword(?string $value = null)
    {
        $this->Keyword = $value;

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

    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

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

    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * @return $this
     */
    public function setContextBid(?int $value = null)
    {
        $this->ContextBid = $value;

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

    /**
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * @see StateEnum
     *
     * @return $this
     */
    public function setState(?string $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * @return $this
     */
    public function setUserParam1(?string $value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * @return $this
     */
    public function setUserParam2(?string $value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    public function getProductivity(): ?KeywordProductivity
    {
        return $this->Productivity ?? null;
    }

    /**
     * @return $this
     */
    public function setProductivity(?KeywordProductivity $value = null)
    {
        $this->Productivity = $value;

        return $this;
    }

    public function getStatisticsSearch(): ?Statistics
    {
        return $this->StatisticsSearch ?? null;
    }

    /**
     * @return $this
     */
    public function setStatisticsSearch(?Statistics $value = null)
    {
        $this->StatisticsSearch = $value;

        return $this;
    }

    public function getStatisticsNetwork(): ?Statistics
    {
        return $this->StatisticsNetwork ?? null;
    }

    /**
     * @return $this
     */
    public function setStatisticsNetwork(?Statistics $value = null)
    {
        $this->StatisticsNetwork = $value;

        return $this;
    }

    /**
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * @see ServingStatusEnum
     *
     * @return $this
     */
    public function setServingStatus(?string $value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    public function getAutotargetingCategories(): ?AutotargetingCategoryArray
    {
        return $this->AutotargetingCategories ?? null;
    }

    /**
     * @return $this
     */
    public function setAutotargetingCategories(?AutotargetingCategoryArray $value = null)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    public function getAutotargetingBrandOptions(): ?AutotargetingBrandOptionArray
    {
        return $this->AutotargetingBrandOptions ?? null;
    }

    /**
     * @return $this
     */
    public function setAutotargetingBrandOptions(?AutotargetingBrandOptionArray $value = null)
    {
        $this->AutotargetingBrandOptions = $value;

        return $this;
    }
}
