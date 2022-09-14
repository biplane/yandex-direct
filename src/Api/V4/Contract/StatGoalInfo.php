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
    protected $GoalID = null;

    protected $Name = null;

    protected $AvailableForStrategy = null;

    protected $AvailableForContextStrategy = null;

    protected $GoalsReached = null;

    protected $ContextGoalsReached = null;

    protected $CampaignID = null;

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

    public function getAvailableForStrategy(): string
    {
        return $this->AvailableForStrategy;
    }

    /**
     * @return $this
     */
    public function setAvailableForStrategy(string $value)
    {
        $this->AvailableForStrategy = $value;

        return $this;
    }

    public function getAvailableForContextStrategy(): string
    {
        return $this->AvailableForContextStrategy;
    }

    /**
     * @return $this
     */
    public function setAvailableForContextStrategy(string $value)
    {
        $this->AvailableForContextStrategy = $value;

        return $this;
    }

    public function getGoalsReached(): int
    {
        return $this->GoalsReached;
    }

    /**
     * @return $this
     */
    public function setGoalsReached(int $value)
    {
        $this->GoalsReached = $value;

        return $this;
    }

    public function getContextGoalsReached(): int
    {
        return $this->ContextGoalsReached;
    }

    /**
     * @return $this
     */
    public function setContextGoalsReached(int $value)
    {
        $this->ContextGoalsReached = $value;

        return $this;
    }

    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }
}
