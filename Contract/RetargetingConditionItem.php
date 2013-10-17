<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingConditionItem
{
    /**
     * @var string
     */
    protected $Type;
    /**
     * @var RetargetingConditionGoalItem[]
     */
    protected $Goals;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets the Type.
     *
     * @param string $Type
     *
     * @return RetargetingConditionItem
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * Gets the Goals.
     *
     * @return RetargetingConditionGoalItem[]
     */
    public function getGoals()
    {
        return $this->Goals;
    }

    /**
     * Sets the Goals.
     *
     * @param RetargetingConditionGoalItem[] $Goals
     *
     * @return RetargetingConditionItem
     */
    public function setGoals(array $Goals)
    {
        $this->Goals = $Goals;

        return $this;
    }
}