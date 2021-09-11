<?php

declare(strict_types=1);

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
     * Gets AvailableForStrategy.
     */
    public function getAvailableForStrategy(): string
    {
        return $this->AvailableForStrategy;
    }

    /**
     * Sets AvailableForStrategy.
     *
     * @return $this
     */
    public function setAvailableForStrategy(string $value)
    {
        $this->AvailableForStrategy = $value;

        return $this;
    }

    /**
     * Gets AvailableForContextStrategy.
     */
    public function getAvailableForContextStrategy(): string
    {
        return $this->AvailableForContextStrategy;
    }

    /**
     * Sets AvailableForContextStrategy.
     *
     * @return $this
     */
    public function setAvailableForContextStrategy(string $value)
    {
        $this->AvailableForContextStrategy = $value;

        return $this;
    }

    /**
     * Gets GoalsReached.
     */
    public function getGoalsReached(): int
    {
        return $this->GoalsReached;
    }

    /**
     * Sets GoalsReached.
     *
     * @return $this
     */
    public function setGoalsReached(int $value)
    {
        $this->GoalsReached = $value;

        return $this;
    }

    /**
     * Gets ContextGoalsReached.
     */
    public function getContextGoalsReached(): int
    {
        return $this->ContextGoalsReached;
    }

    /**
     * Sets ContextGoalsReached.
     *
     * @return $this
     */
    public function setContextGoalsReached(int $value)
    {
        $this->ContextGoalsReached = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }
}
