<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $Campaigns = null;

    /**
     * Creates a new instance of GetCampaignsResponse.
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
     * @return CampaignGetItem[]|null
     */
    public function getCampaigns()
    {
        return isset($this->Campaigns) ? $this->Campaigns : null;
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

