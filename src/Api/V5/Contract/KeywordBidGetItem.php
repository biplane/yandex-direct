<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidGetItem extends KeywordBidActionResult
{
//    Can be omit.
//    protected $ServingStatus = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $Search = null;

//    Can be omit.
//    protected $Network = null;

    /**
     * Creates a new instance of KeywordBidGetItem.
     */
    public static function create(): self
    {
        return new self();
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
     * Gets Search.
     */
    public function getSearch(): ?Search
    {
        return $this->Search ?? null;
    }

    /**
     * Sets Search.
     *
     * @return $this
     */
    public function setSearch(?Search $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     */
    public function getNetwork(): ?Network
    {
        return $this->Network ?? null;
    }

    /**
     * Sets Network.
     *
     * @return $this
     */
    public function setNetwork(?Network $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
