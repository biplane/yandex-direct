<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdTargetAddItem
{
    protected $Name = null;

    protected $AdGroupId = null;

//    Can be omitted.
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $AverageCpa = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

    protected $Audience = null;

//    Can be omitted.
//    protected $Conditions = null;

//    Can be omitted.
//    protected $AvailableItemsOnly = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

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
     * @see AudienceEnum
     */
    public function getAudience(): string
    {
        return $this->Audience;
    }

    /**
     * @see AudienceEnum
     *
     * @return $this
     */
    public function setAudience(string $value)
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
