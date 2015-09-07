<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingGoal
{

    protected $GoalID = null;

    protected $Name = null;

    protected $GoalDomain = null;

    protected $Login = null;

    protected $Type = null;

    /**
     * Creates a new instance of RetargetingGoal.
     *
     * @return RetargetingGoal
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
     * @return $this
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
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets GoalDomain.
     *
     * @return string
     */
    public function getGoalDomain()
    {
        return $this->GoalDomain;
    }

    /**
     * Sets GoalDomain.
     *
     * @param string $value
     * @return $this
     */
    public function setGoalDomain($value)
    {
        $this->GoalDomain = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
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


}

