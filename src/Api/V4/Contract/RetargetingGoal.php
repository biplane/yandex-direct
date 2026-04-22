<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingGoal
{
    /** @var int */
    protected $GoalID;

    /** @var string */
    protected $Name;

    /** @var string */
    protected $GoalDomain;

    /** @var string */
    protected $Login;

    /** @var string */
    protected $Type;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get GoalID
     */
    public function getGoalID(): int
    {
        return $this->GoalID;
    }

    /**
     * Set GoalID
     *
     * @return $this
     */
    public function setGoalID(int $value)
    {
        $this->GoalID = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get GoalDomain
     */
    public function getGoalDomain(): string
    {
        return $this->GoalDomain;
    }

    /**
     * Set GoalDomain
     *
     * @return $this
     */
    public function setGoalDomain(string $value)
    {
        $this->GoalDomain = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get Type
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
