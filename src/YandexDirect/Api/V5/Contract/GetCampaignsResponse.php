<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsResponse extends GetResponseGeneral
{

    protected $Campaigns = null;

    /**
     * Creates a new instance of GetCampaignsResponse.
     *
     * @return GetCampaignsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignGetItem[]|null
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignGetItem[]|null $value
     * @return $this
     */
    public function setCampaigns(array $value = null)
    {
        $this->Campaigns = $value;

        return $this;
    }


}

