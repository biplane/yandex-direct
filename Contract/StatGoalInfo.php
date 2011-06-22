<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class StatGoalInfo
{
    /**
     * @var int
     */
    protected $GoalID;
    /**
     * @var string
     */
    protected $Name;

    /**
     * @return int
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * @param int $GoalID
     * @return StatGoalInfo
     */
    public function setGoalID($GoalID)
    {
        $this->GoalID = $GoalID;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return StatGoalInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}