<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionItem
{

    protected $Type = null;

    protected $Goals = [];

    /**
     * Creates a new instance of RetargetingConditionItem.
     *
     * @return self
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
     * @return self
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
     * @param RetargetingConditionGoalItem[] $value
     * @return self
     */
    public function setGoals(array $value)
    {
        $this->Goals = $value;

        return $this;
    }


}

