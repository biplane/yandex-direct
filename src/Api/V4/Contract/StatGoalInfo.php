<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StatGoalInfo
{
    /** @var int */
    protected $GoalID;

    /** @var string */
    protected $Name;

    /** @var string */
    protected $AvailableForStrategy;

    /** @var string */
    protected $AvailableForContextStrategy;

    /** @var int */
    protected $GoalsReached;

    /** @var int */
    protected $ContextGoalsReached;

    /** @var int|null */
    protected $CampaignID = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
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
     * Get AvailableForStrategy
     */
    public function getAvailableForStrategy(): string
    {
        return $this->AvailableForStrategy;
    }

    /**
     * Set AvailableForStrategy
     *
     * @return $this
     */
    public function setAvailableForStrategy(string $value)
    {
        $this->AvailableForStrategy = $value;

        return $this;
    }

    /**
     * Get AvailableForContextStrategy
     */
    public function getAvailableForContextStrategy(): string
    {
        return $this->AvailableForContextStrategy;
    }

    /**
     * Set AvailableForContextStrategy
     *
     * @return $this
     */
    public function setAvailableForContextStrategy(string $value)
    {
        $this->AvailableForContextStrategy = $value;

        return $this;
    }

    /**
     * Get GoalsReached
     */
    public function getGoalsReached(): int
    {
        return $this->GoalsReached;
    }

    /**
     * Set GoalsReached
     *
     * @return $this
     */
    public function setGoalsReached(int $value)
    {
        $this->GoalsReached = $value;

        return $this;
    }

    /**
     * Get ContextGoalsReached
     */
    public function getContextGoalsReached(): int
    {
        return $this->ContextGoalsReached;
    }

    /**
     * Set ContextGoalsReached
     *
     * @return $this
     */
    public function setContextGoalsReached(int $value)
    {
        $this->ContextGoalsReached = $value;

        return $this;
    }

    /**
     * Get CampaignID
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Set CampaignID
     *
     * @return $this
     */
    public function setCampaignID(?int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }
}
