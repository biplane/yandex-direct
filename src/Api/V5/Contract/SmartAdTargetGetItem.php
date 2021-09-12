<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdTargetGetItem
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
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $AverageCpa = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

//    Can be omitted.
//    protected $State = null;

//    Can be omitted.
//    protected $Audience = null;

//    Can be omitted.
//    protected $Conditions = null;

//    Can be omitted.
//    protected $ConditionType = null;

//    Can be omitted.
//    protected $AvailableItemsOnly = null;

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

    public function getAverageCpc(): ?int
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?int $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpa(): ?int
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpa(?int $value = null)
    {
        $this->AverageCpa = $value;

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
     * @see AudienceEnum
     */
    public function getAudience(): ?string
    {
        return $this->Audience ?? null;
    }

    /**
     * @see AudienceEnum
     *
     * @return $this
     */
    public function setAudience(?string $value = null)
    {
        $this->Audience = $value;

        return $this;
    }

    public function getConditions(): ?ConditionsArray
    {
        return $this->Conditions ?? null;
    }

    /**
     * @return $this
     */
    public function setConditions(?ConditionsArray $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * @see ConditionTypeEnum
     */
    public function getConditionType(): ?string
    {
        return $this->ConditionType ?? null;
    }

    /**
     * @see ConditionTypeEnum
     *
     * @return $this
     */
    public function setConditionType(?string $value = null)
    {
        $this->ConditionType = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAvailableItemsOnly(): ?string
    {
        return $this->AvailableItemsOnly ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAvailableItemsOnly(?string $value = null)
    {
        $this->AvailableItemsOnly = $value;

        return $this;
    }
}
