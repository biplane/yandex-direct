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
//    protected $Id = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $Bid = null;

//    Can be omitted.
//    protected $ContextBid = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

//    Can be omitted.
//    protected $State = null;

//    Can be omitted.
//    protected $StatusClarification = null;

//    Can be omitted.
//    protected $Conditions = null;

//    Can be omitted.
//    protected $ConditionType = null;

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

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

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

    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * @return WebpageCondition[]|null
     */
    public function getConditions(): ?array
    {
        return $this->Conditions ?? null;
    }

    /**
     * @param WebpageCondition[]|null $value
     *
     * @return $this
     */
    public function setConditions(?array $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * @see WebpageTypeEnum
     */
    public function getConditionType(): ?string
    {
        return $this->ConditionType ?? null;
    }

    /**
     * @see WebpageTypeEnum
     *
     * @return $this
     */
    public function setConditionType(?string $value = null)
    {
        $this->ConditionType = $value;

        return $this;
    }
}
