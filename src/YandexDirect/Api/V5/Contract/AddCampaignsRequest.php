<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddCampaignsRequest
{

    protected $Campaigns = [];

    /**
     * Creates a new instance of AddCampaignsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return CampaignAddItem[]
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param CampaignAddItem[] $value
     * @return self
     */
    public function setCampaigns(array $value)
    {
        $this->Campaigns = $value;

        return $this;
    }


}

