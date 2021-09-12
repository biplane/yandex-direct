<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidGetItem extends KeywordBidActionResult
{
//    Can be omitted.
//    protected $ServingStatus = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

//    Can be omitted.
//    protected $Search = null;

//    Can be omitted.
//    protected $Network = null;

    /**
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
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

    public function getSearch(): ?Search
    {
        return $this->Search ?? null;
    }

    /**
     * @return $this
     */
    public function setSearch(?Search $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    public function getNetwork(): ?Network
    {
        return $this->Network ?? null;
    }

    /**
     * @return $this
     */
    public function setNetwork(?Network $value = null)
    {
        $this->Network = $value;

        return $this;
    }
}
