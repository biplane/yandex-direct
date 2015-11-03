<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateCampaignsRequest
{

    protected $Campaigns = array(
        
    );

    /**
     * Creates a new instance of UpdateCampaignsRequest.
     *
     * @return UpdateCampaignsRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignUpdateItem[]
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignUpdateItem[] $value
     * @return $this
     */
    public function setCampaigns(array $value)
    {
        $this->Campaigns = $value;

        return $this;
    }


}

