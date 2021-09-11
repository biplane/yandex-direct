<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignGetItem extends DynamicTextCampaignBase
{
//    Can be omit.
//    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $PriorityGoals = null;

    /**
     * Creates a new instance of DynamicTextCampaignGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     */
    public function getBiddingStrategy(): ?DynamicTextCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @return $this
     */
    public function setBiddingStrategy(?DynamicTextCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return DynamicTextCampaignSettingGet[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param DynamicTextCampaignSettingGet[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets PriorityGoals.
     */
    public function getPriorityGoals(): ?PriorityGoalsArray
    {
        return $this->PriorityGoals ?? null;
    }

    /**
     * Sets PriorityGoals.
     *
     * @return $this
     */
    public function setPriorityGoals(?PriorityGoalsArray $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }
}
