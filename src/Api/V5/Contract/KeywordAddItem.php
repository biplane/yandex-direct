<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordAddItem
{
    protected $Keyword = null;

    protected $AdGroupId = null;

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $UserParam1 = null;

//    Can be omit.
//    protected $UserParam2 = null;

    /**
     * Creates a new instance of KeywordAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keyword.
     */
    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

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

    /**
     * Gets UserParam1.
     */
    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * Sets UserParam1.
     *
     * @return $this
     */
    public function setUserParam1(?string $value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Gets UserParam2.
     */
    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * Sets UserParam2.
     *
     * @return $this
     */
    public function setUserParam2(?string $value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }
}
