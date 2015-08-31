<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingGoal
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
    protected $GoalDomain;
    /**
     * @var string
     */
    protected $Login;

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
     * @return RetargetingGoal
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
     * @return RetargetingGoal
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Gets the GoalDomain.
     *
     * @return string
     */
    public function getGoalDomain()
    {
        return $this->GoalDomain;
    }

    /**
     * Sets the GoalDomain.
     *
     * @param string $GoalDomain
     *
     * @return RetargetingGoal
     */
    public function setGoalDomain($GoalDomain)
    {
        $this->GoalDomain = $GoalDomain;

        return $this;
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return RetargetingGoal
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }
}