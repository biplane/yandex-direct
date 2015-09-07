<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionItem
{

    protected $Type = null;

    protected $Goals = array(
        
    );

    /**
     * Creates a new instance of RetargetingConditionItem.
     *
     * @return RetargetingConditionItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Goals.
     *
     * @return RetargetingConditionGoalItem[]
     */
    public function getGoals()
    {
        return $this->Goals;
    }

    /**
     * Sets Goals.
     *
     * @param array $value
     * @return $this
     */
    public function setGoals(array $value)
    {
        $this->Goals = $value;

        return $this;
    }


}

