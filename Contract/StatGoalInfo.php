<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * @var string
     */
    protected $AvailableForStrategy;
    /**
     * @var string
     */
    protected $AvailableForContextStrategy;

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

    /**
     * @return string
     */
    public function getAvailableForStrategy()
    {
        return $this->AvailableForStrategy;
    }

    /**
     * @param string $AvailableForStrategy
     * @return StatGoalInfo
     */
    public function setAvailableForStrategy($AvailableForStrategy)
    {
        $this->AvailableForStrategy = $AvailableForStrategy;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableForContextStrategy()
    {
        return $this->AvailableForContextStrategy;
    }

    /**
     * @param string $AvailableForContextStrategy
     * @return StatGoalInfo
     */
    public function setAvailableForContextStrategy($AvailableForContextStrategy)
    {
        $this->AvailableForContextStrategy = $AvailableForContextStrategy;

        return $this;
    }
}