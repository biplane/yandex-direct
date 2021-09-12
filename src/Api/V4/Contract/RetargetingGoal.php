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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getGoalID(): int
    {
        return $this->GoalID;
    }

    /**
     * @return $this
     */
    public function setGoalID(int $value)
    {
        $this->GoalID = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getGoalDomain(): string
    {
        return $this->GoalDomain;
    }

    /**
     * @return $this
     */
    public function setGoalDomain(string $value)
    {
        $this->GoalDomain = $value;

        return $this;
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
