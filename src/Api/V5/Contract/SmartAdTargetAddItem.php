<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartAdTargetAddItem
{
    /** @var string */
    protected $Name;

    /** @var int */
    protected $AdGroupId;

//    Can be omitted.
//    protected $AverageCpc;

//    Can be omitted.
//    protected $AverageCpa;

//    Can be omitted.
//    protected $StrategyPriority;

    /** @var 'INTERESTED_IN_SIMILAR_PRODUCTS'|'VISITED_PRODUCT_PAGE'|'ALL_SEGMENTS' */
    protected $Audience;

//    Can be omitted.
//    protected $Conditions;

//    Can be omitted.
//    protected $AvailableItemsOnly;

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
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get AdGroupId
     */
    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * Set AdGroupId
     *
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?int
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?int $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpa
     */
    public function getAverageCpa(): ?int
    {
        return $this->AverageCpa ?? null;
    }

    /**
     * Set AverageCpa
     *
     * @return $this
     */
    public function setAverageCpa(?int $value)
    {
        $this->AverageCpa = $value;

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
     * Get Audience
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AudienceEnum
     *
     * @return 'INTERESTED_IN_SIMILAR_PRODUCTS'|'VISITED_PRODUCT_PAGE'|'ALL_SEGMENTS'
     */
    public function getAudience(): string
    {
        return $this->Audience;
    }

    /**
     * Set Audience
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AudienceEnum
     *
     * @param 'INTERESTED_IN_SIMILAR_PRODUCTS'|'VISITED_PRODUCT_PAGE'|'ALL_SEGMENTS' $value
     *
     * @return $this
     */
    public function setAudience(string $value)
    {
        $this->Audience = $value;

        return $this;
    }

    /**
     * Get Conditions
     */
    public function getConditions(): ?ConditionsArray
    {
        return $this->Conditions ?? null;
    }

    /**
     * Set Conditions
     *
     * @return $this
     */
    public function setConditions(?ConditionsArray $value)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Get AvailableItemsOnly
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAvailableItemsOnly(): ?string
    {
        return $this->AvailableItemsOnly ?? null;
    }

    /**
     * Set AvailableItemsOnly
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAvailableItemsOnly(?string $value)
    {
        $this->AvailableItemsOnly = $value;

        return $this;
    }
}
