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

//    Can be omitted.
//    protected $Conditions = null;

//    Can be omitted.
//    protected $Bid = null;

//    Can be omitted.
//    protected $ContextBid = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

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
}
