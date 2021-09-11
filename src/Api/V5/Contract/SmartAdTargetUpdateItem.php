<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdTargetUpdateItem
{
    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $AverageCpa = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $Audience = null;

//    Can be omit.
//    protected $Conditions = null;

//    Can be omit.
//    protected $AvailableItemsOnly = null;

    /**
     * Creates a new instance of SmartAdTargetUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

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
    public function getAudience(): ?string
    {
        return $this->Audience ?? null;
    }

    /**
     * Sets Audience.
     *
     * @see AudienceEnum
     *
     * @return $this
     */
    public function setAudience(?string $value = null)
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
