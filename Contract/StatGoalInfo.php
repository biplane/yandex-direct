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
     * @var int
     */
    protected $GoalsReached;
    /**
     * @var int
     */
    protected $ContextGoalsReached;
    /**
     * @var int
     */
    protected $CampaignID;

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
     * Gets the GoalID.
     *
     * @return int
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * Sets the GoalID.
     *
     * @param int $GoalID
     *
     * @return StatGoalInfo
     */
    public function setGoalID($GoalID)
    {
        $this->GoalID = $GoalID;

        return $this;
    }

    /**
     * Gets the Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Name.
     *
     * @param string $Name
     *
     * @return StatGoalInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Gets the AvailableForStrategy.
     *
     * @return string
     */
    public function getAvailableForStrategy()
    {
        return $this->AvailableForStrategy;
    }

    /**
     * Sets the AvailableForStrategy.
     *
     * @param string $AvailableForStrategy
     *
     * @return StatGoalInfo
     */
    public function setAvailableForStrategy($AvailableForStrategy)
    {
        $this->AvailableForStrategy = $AvailableForStrategy;

        return $this;
    }

    /**
     * Gets the AvailableForContextStrategy.
     *
     * @return string
     */
    public function getAvailableForContextStrategy()
    {
        return $this->AvailableForContextStrategy;
    }

    /**
     * Sets the AvailableForContextStrategy.
     *
     * @param string $AvailableForContextStrategy
     *
     * @return StatGoalInfo
     */
    public function setAvailableForContextStrategy($AvailableForContextStrategy)
    {
        $this->AvailableForContextStrategy = $AvailableForContextStrategy;

        return $this;
    }

    /**
     * Gets the GoalsReached.
     *
     * @return int
     */
    public function getGoalsReached()
    {
        return $this->GoalsReached;
    }

    /**
     * Sets the GoalsReached.
     *
     * @param int $GoalsReached
     *
     * @return StatGoalInfo
     */
    public function setGoalsReached($GoalsReached)
    {
        $this->GoalsReached = $GoalsReached;

        return $this;
    }

    /**
     * Gets the ContextGoalsReached.
     *
     * @return int
     */
    public function getContextGoalsReached()
    {
        return $this->ContextGoalsReached;
    }

    /**
     * Sets the ContextGoalsReached.
     *
     * @param int $ContextGoalsReached
     *
     * @return StatGoalInfo
     */
    public function setContextGoalsReached($ContextGoalsReached)
    {
        $this->ContextGoalsReached = $ContextGoalsReached;

        return $this;
    }

    /**
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return StatGoalInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }
}