<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class StatGoalInfo
{

    protected $GoalID = null;

    protected $Name = null;

    protected $AvailableForStrategy = null;

    protected $AvailableForContextStrategy = null;

    protected $GoalsReached = null;

    protected $ContextGoalsReached = null;

    protected $CampaignID = null;

    /**
     * Creates a new instance of StatGoalInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets GoalID.
     *
     * @return int
     */
    public function getGoalID()
    {
        return $this->GoalID;
    }

    /**
     * Sets GoalID.
     *
     * @param int $value
     * @return self
     */
    public function setGoalID($value)
    {
        $this->GoalID = $value;

        return $this;
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
     * @return self
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets AvailableForStrategy.
     *
     * @return string
     */
    public function getAvailableForStrategy()
    {
        return $this->AvailableForStrategy;
    }

    /**
     * Sets AvailableForStrategy.
     *
     * @param string $value
     * @return self
     */
    public function setAvailableForStrategy($value)
    {
        $this->AvailableForStrategy = $value;

        return $this;
    }

    /**
     * Gets AvailableForContextStrategy.
     *
     * @return string
     */
    public function getAvailableForContextStrategy()
    {
        return $this->AvailableForContextStrategy;
    }

    /**
     * Sets AvailableForContextStrategy.
     *
     * @param string $value
     * @return self
     */
    public function setAvailableForContextStrategy($value)
    {
        $this->AvailableForContextStrategy = $value;

        return $this;
    }

    /**
     * Gets GoalsReached.
     *
     * @return int
     */
    public function getGoalsReached()
    {
        return $this->GoalsReached;
    }

    /**
     * Sets GoalsReached.
     *
     * @param int $value
     * @return self
     */
    public function setGoalsReached($value)
    {
        $this->GoalsReached = $value;

        return $this;
    }

    /**
     * Gets ContextGoalsReached.
     *
     * @return int
     */
    public function getContextGoalsReached()
    {
        return $this->ContextGoalsReached;
    }

    /**
     * Sets ContextGoalsReached.
     *
     * @param int $value
     * @return self
     */
    public function setContextGoalsReached($value)
    {
        $this->ContextGoalsReached = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return self
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }


}

