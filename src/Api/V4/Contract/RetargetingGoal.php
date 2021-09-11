<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets GoalID.
     */
    public function getGoalID(): int
    {
        return $this->GoalID;
    }

    /**
     * Sets GoalID.
     *
     * @return $this
     */
    public function setGoalID(int $value)
    {
        $this->GoalID = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets GoalDomain.
     */
    public function getGoalDomain(): string
    {
        return $this->GoalDomain;
    }

    /**
     * Sets GoalDomain.
     *
     * @return $this
     */
    public function setGoalDomain(string $value)
    {
        $this->GoalDomain = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Type.
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
