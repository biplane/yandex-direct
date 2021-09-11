<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordGetItem
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Keyword = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $UserParam1 = null;

//    Can be omit.
//    protected $UserParam2 = null;

//    Can be omit.
//    protected $Productivity = null;

//    Can be omit.
//    protected $StatisticsSearch = null;

//    Can be omit.
//    protected $StatisticsNetwork = null;

//    Can be omit.
//    protected $ServingStatus = null;

    /**
     * Creates a new instance of KeywordGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Keyword.
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * Sets Keyword.
     *
     * @return $this
     */
    public function setKeyword(?string $value = null)
    {
        $this->Keyword = $value;

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
     * Gets Bid.
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Sets Bid.
     *
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets ContextBid.
     */
    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * Sets ContextBid.
     *
     * @return $this
     */
    public function setContextBid(?int $value = null)
    {
        $this->ContextBid = $value;

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

    /**
     * Gets State.
     *
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Sets State.
     *
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
     * Gets Status.
     *
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Sets Status.
     *
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets UserParam1.
     */
    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * Sets UserParam1.
     *
     * @return $this
     */
    public function setUserParam1(?string $value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Gets UserParam2.
     */
    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * Sets UserParam2.
     *
     * @return $this
     */
    public function setUserParam2(?string $value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    /**
     * Gets Productivity.
     */
    public function getProductivity(): ?KeywordProductivity
    {
        return $this->Productivity ?? null;
    }

    /**
     * Sets Productivity.
     *
     * @return $this
     */
    public function setProductivity(?KeywordProductivity $value = null)
    {
        $this->Productivity = $value;

        return $this;
    }

    /**
     * Gets StatisticsSearch.
     */
    public function getStatisticsSearch(): ?Statistics
    {
        return $this->StatisticsSearch ?? null;
    }

    /**
     * Sets StatisticsSearch.
     *
     * @return $this
     */
    public function setStatisticsSearch(?Statistics $value = null)
    {
        $this->StatisticsSearch = $value;

        return $this;
    }

    /**
     * Gets StatisticsNetwork.
     */
    public function getStatisticsNetwork(): ?Statistics
    {
        return $this->StatisticsNetwork ?? null;
    }

    /**
     * Sets StatisticsNetwork.
     *
     * @return $this
     */
    public function setStatisticsNetwork(?Statistics $value = null)
    {
        $this->StatisticsNetwork = $value;

        return $this;
    }

    /**
     * Gets ServingStatus.
     *
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Sets ServingStatus.
     *
     * @see ServingStatusEnum
     *
     * @return $this
     */
    public function setServingStatus(?string $value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }
}
