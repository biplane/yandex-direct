<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StatGoalsCampaignIDInfo
{
    protected $CampaignID = null;

    protected $CampaignIDS = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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

    /**
     * @return int[]|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS;
    }

    /**
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
