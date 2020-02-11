<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetBase
{

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

    /**
     * Creates a new instance of AudienceTargetBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ContextBid.
     *
     * @return int|null
     */
    public function getContextBid()
    {
        return isset($this->ContextBid) ? $this->ContextBid : null;
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


}

