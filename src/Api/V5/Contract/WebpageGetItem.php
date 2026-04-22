<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class WebpageGetItem
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $Bid;

//    Can be omitted.
//    protected $ContextBid;

//    Can be omitted.
//    protected $StrategyPriority;

//    Can be omitted.
//    protected $State;

//    Can be omitted.
//    protected $StatusClarification;

//    Can be omitted.
//    protected $Conditions;

//    Can be omitted.
//    protected $ConditionType;

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
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

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
     * Get StatusClarification
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Set StatusClarification
     *
     * @return $this
     */
    public function setStatusClarification(?string $value)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Get Conditions
     *
     * @return list<WebpageCondition>
     */
    public function getConditions(): array
    {
        return $this->Conditions ?? [];
    }

    /**
     * Set Conditions
     *
     * @param list<WebpageCondition> $value
     *
     * @return $this
     */
    public function setConditions(array $value)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Get ConditionType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\WebpageTypeEnum
     *
     * @return 'PAGES_ALL'|'PAGES_SUBSET'|null
     */
    public function getConditionType(): ?string
    {
        return $this->ConditionType ?? null;
    }

    /**
     * Set ConditionType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\WebpageTypeEnum
     *
     * @param 'PAGES_ALL'|'PAGES_SUBSET'|null $value
     *
     * @return $this
     */
    public function setConditionType(?string $value)
    {
        $this->ConditionType = $value;

        return $this;
    }
}
