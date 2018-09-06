<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ServingStatus.
     *
     * @return string|null
     * @see ServingStatusEnum
     */
    public function getServingStatus()
    {
        return isset($this->ServingStatus) ? $this->ServingStatus : null;
    }

    /**
     * Sets ServingStatus.
     *
     * @param string|null $value
     * @return $this
     * @see ServingStatusEnum
     */
    public function setServingStatus($value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @return string|null
     * @see PriorityEnum
     */
    public function getStrategyPriority()
    {
        return isset($this->StrategyPriority) ? $this->StrategyPriority : null;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param string|null $value
     * @return $this
     * @see PriorityEnum
     */
    public function setStrategyPriority($value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Gets Search.
     *
     * @return Search|null
     */
    public function getSearch()
    {
        return isset($this->Search) ? $this->Search : null;
    }

    /**
     * Sets Search.
     *
     * @param Search|null $value
     * @return $this
     */
    public function setSearch(Search $value = null)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Gets Network.
     *
     * @return Network|null
     */
    public function getNetwork()
    {
        return isset($this->Network) ? $this->Network : null;
    }

    /**
     * Sets Network.
     *
     * @param Network|null $value
     * @return $this
     */
    public function setNetwork(Network $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

