<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordBidGetItem extends KeywordBidActionResult
{
//    Can be omitted.
//    protected $ServingStatus;

//    Can be omitted.
//    protected $StrategyPriority;

//    Can be omitted.
//    protected $Search;

//    Can be omitted.
//    protected $Network;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @return 'ELIGIBLE'|'RARELY_SERVED'|null
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Set ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @param 'ELIGIBLE'|'RARELY_SERVED'|null $value
     *
     * @return $this
     */
    public function setServingStatus(?string $value)
    {
        $this->ServingStatus = $value;

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
     * Get Search
     */
    public function getSearch(): ?Search
    {
        return $this->Search ?? null;
    }

    /**
     * Set Search
     *
     * @return $this
     */
    public function setSearch(?Search $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     */
    public function getNetwork(): ?Network
    {
        return $this->Network ?? null;
    }

    /**
     * Set Network
     *
     * @return $this
     */
    public function setNetwork(?Network $value)
    {
        $this->Network = $value;

        return $this;
    }
}
