<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordAddItem
{

    protected $Keyword = null;

    protected $AdGroupId = null;

    protected $Bid = null;

    protected $ContextBid = null;

    protected $StrategyPriority = null;

    protected $UserParam1 = null;

    protected $UserParam2 = null;

    /**
     * Creates a new instance of KeywordAddItem.
     *
     * @return KeywordAddItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Keyword.
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @param string $value
     * @return $this
     */
    public function setKeyword($value)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int $value
     * @return $this
     */
    public function setAdGroupId($value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Bid.
     *
     * @return int|null
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets ContextBid.
     *
     * @return int|null
     */
    public function getContextBid()
    {
        return $this->ContextBid;
    }

    /**
     * Sets ContextBid.
     *
     * @param int|null $value
     * @return $this
     */
    public function setContextBid($value = null)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @return PriorityEnum|null
     */
    public function getStrategyPriority()
    {
        return $this->StrategyPriority;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param PriorityEnum|null $value
     * @return $this
     */
    public function setStrategyPriority(PriorityEnum $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Gets UserParam1.
     *
     * @return string|null
     */
    public function getUserParam1()
    {
        return $this->UserParam1;
    }

    /**
     * Sets UserParam1.
     *
     * @param string|null $value
     * @return $this
     */
    public function setUserParam1($value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Gets UserParam2.
     *
     * @return string|null
     */
    public function getUserParam2()
    {
        return $this->UserParam2;
    }

    /**
     * Sets UserParam2.
     *
     * @param string|null $value
     * @return $this
     */
    public function setUserParam2($value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }


}

