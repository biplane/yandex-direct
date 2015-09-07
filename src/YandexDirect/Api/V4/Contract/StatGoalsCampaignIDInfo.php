<?php

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
     *
     * @return StatGoalsCampaignIDInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setCampaignIDS(array $value = null)
    {
        $this->CampaignIDS = $value;

        return $this;
    }


}

