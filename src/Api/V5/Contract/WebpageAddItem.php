<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class WebpageAddItem
{
    protected $Name = null;

    protected $AdGroupId = null;

//    Can be omit.
//    protected $Conditions = null;

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

    /**
     * Creates a new instance of WebpageAddItem.
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
     * Gets Conditions.
     *
     * @return WebpageCondition[]|null
     */
    public function getConditions(): ?array
    {
        return $this->Conditions ?? null;
    }

    /**
     * Sets Conditions.
     *
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
}
