<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class StatGoalsCampaignIDInfo
{
    protected $CampaignID = null;

    protected $CampaignIDS = null;

    /**
     * Creates a new instance of StatGoalsCampaignIDInfo.
     */
    public static function create(): self
    {
        return new self();
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

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIDS(?array $value = null)
    {
        $this->CampaignIDS = $value;

        return $this;
    }
}
