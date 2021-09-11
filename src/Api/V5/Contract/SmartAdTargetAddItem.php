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

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $AverageCpa = null;

//    Can be omit.
//    protected $StrategyPriority = null;

    protected $Audience = null;

//    Can be omit.
//    protected $Conditions = null;

//    Can be omit.
//    protected $AvailableItemsOnly = null;

    /**
     * Creates a new instance of SmartAdTargetAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     */
    public function getAverageCpc(): ?int
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Sets AverageCpc.
     *
     * @return $this
     */
    public function setAverageCpc(?int $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpa.
     */
    public function getAverageCpa(): ?int
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Sets AverageCpa.
     *
     * @return $this
     */
    public function setAverageCpa(?int $value = null)
    {
        $this->AverageCpa = $value;

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
     * Gets Audience.
     *
     * @see AudienceEnum
     */
    public function getAudience(): string
    {
        return $this->Audience;
    }

    /**
     * Sets Audience.
     *
     * @see AudienceEnum
     *
     * @return $this
     */
    public function setAudience(string $value)
    {
        $this->Audience = $value;

        return $this;
    }

    /**
     * Gets Conditions.
     */
    public function getConditions(): ?ConditionsArray
    {
        return $this->Conditions ?? null;
    }

    /**
     * Sets Conditions.
     *
     * @return $this
     */
    public function setConditions(?ConditionsArray $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Gets AvailableItemsOnly.
     *
     * @see YesNoEnum
     */
    public function getAvailableItemsOnly(): ?string
    {
        return $this->AvailableItemsOnly ?? null;
    }

    /**
     * Sets AvailableItemsOnly.
     *
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
