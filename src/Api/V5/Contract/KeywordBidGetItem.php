<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidGetItem extends KeywordBidBase
{

    protected $ServingStatus = null;

    protected $StrategyPriority = null;

    protected $Search = null;

    protected $Network = null;

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
        return $this->ServingStatus;
    }

    /**
     * Sets ServingStatus.
     *
     * @param string|null $value
     * @return self
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
        return $this->StrategyPriority;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param string|null $value
     * @return self
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
        return $this->Search;
    }

    /**
     * Sets Search.
     *
     * @param Search|null $value
     * @return self
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
        return $this->Network;
    }

    /**
     * Sets Network.
     *
     * @param Network|null $value
     * @return self
     */
    public function setNetwork(Network $value = null)
    {
        $this->Network = $value;

        return $this;
    }


}

