<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdTargetAddItem
{

    protected $Name = null;

    protected $AdGroupId = null;

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $AverageCpa = null;

//    Can be omit.
//    protected $StrategyPriority = null;

    protected $Audience = null;

//    Can be omit.
//    protected $Conditions = null;

//    Can be omit.
//    protected $AvailableItemsOnly = null;

    /**
     * Creates a new instance of SmartAdTargetAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

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
     * Gets AverageCpc.
     *
     * @return int|null
     */
    public function getAverageCpc()
    {
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpc($value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpa.
     *
     * @return int|null
     */
    public function getAverageCpa()
    {
        return isset($this->AverageCpa) ? $this->AverageCpa : null;
    }

    /**
     * Sets AverageCpa.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpa($value = null)
    {
        $this->AverageCpa = $value;

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
     * Gets Audience.
     *
     * @return string
     * @see AudienceEnum
     */
    public function getAudience()
    {
        return $this->Audience;
    }

    /**
     * Sets Audience.
     *
     * @param string $value
     * @return $this
     * @see AudienceEnum
     */
    public function setAudience($value)
    {
        $this->Audience = $value;

        return $this;
    }

    /**
     * Gets Conditions.
     *
     * @return ConditionsArray|null
     */
    public function getConditions()
    {
        return isset($this->Conditions) ? $this->Conditions : null;
    }

    /**
     * Sets Conditions.
     *
     * @param ConditionsArray|null $value
     * @return $this
     */
    public function setConditions(ConditionsArray $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Gets AvailableItemsOnly.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAvailableItemsOnly()
    {
        return isset($this->AvailableItemsOnly) ? $this->AvailableItemsOnly : null;
    }

    /**
     * Sets AvailableItemsOnly.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setAvailableItemsOnly($value = null)
    {
        $this->AvailableItemsOnly = $value;

        return $this;
    }


}

