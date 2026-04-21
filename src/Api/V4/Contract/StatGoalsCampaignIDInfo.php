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
    /** @var int|null */
    protected $CampaignID = null;

//    Can be omitted.
//    protected $CampaignIDS;

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

    /**
     * Get CampaignIDS
     *
     * @return list<int>|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS ?? null;
    }

    /**
     * Set CampaignIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setCampaignIDS(?array $value)
    {
        $this->CampaignIDS = $value;

        return $this;
    }
}
