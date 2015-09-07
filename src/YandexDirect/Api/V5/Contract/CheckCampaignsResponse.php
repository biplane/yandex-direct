<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckCampaignsResponse
{

    protected $Campaigns = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckCampaignsResponse.
     *
     * @return CheckCampaignsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignChangesItem[]|null
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignChangesItem[]|null $value
     * @return $this
     */
    public function setCampaigns(array $value = null)
    {
        $this->Campaigns = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string $value
     * @return $this
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

