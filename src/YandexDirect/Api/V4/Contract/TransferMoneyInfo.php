<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TransferMoneyInfo
{

    protected $FromCampaigns = array(
        
    );

    protected $ToCampaigns = array(
        
    );

    /**
     * Creates a new instance of TransferMoneyInfo.
     *
     * @return TransferMoneyInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FromCampaigns.
     *
     * @return PayCampElement[]
     */
    public function getFromCampaigns()
    {
        return $this->FromCampaigns;
    }

    /**
     * Sets FromCampaigns.
     *
     * @param PayCampElement[] $value
     * @return $this
     */
    public function setFromCampaigns(array $value)
    {
        $this->FromCampaigns = $value;

        return $this;
    }

    /**
     * Gets ToCampaigns.
     *
     * @return PayCampElement[]
     */
    public function getToCampaigns()
    {
        return $this->ToCampaigns;
    }

    /**
     * Sets ToCampaigns.
     *
     * @param PayCampElement[] $value
     * @return $this
     */
    public function setToCampaigns(array $value)
    {
        $this->ToCampaigns = $value;

        return $this;
    }


}

