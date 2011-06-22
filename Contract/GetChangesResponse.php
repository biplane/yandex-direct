<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class GetChangesResponse
{
    /**
     * @var GetChangesIntData
     */
    protected $Campaigns;
    /**
     * @var GetChangesIntData
     */
    protected $Banners;
    /**
     * @var GetChangesStringData
     */
    protected $Logins;
    /**
     * @var CampaignStatChangeItem[]
     */
    protected $CampaignsStatChange;
    /**
     * @var string
     */
    protected $Timestamp;
    /**
     * @var string
     */
    protected $RubricsChanged;
    /**
     * @var string
     */
    protected $TimeZonesChanged;
    /**
     * @var string
     */
    protected $RegionsChanged;

    /**
     * @return GetChangesIntData
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * @param GetChangesIntData $Campaigns
     * @return GetChangesResponse
     */
    public function setCampaigns(GetChangesIntData $Campaigns)
    {
        $this->Campaigns = $Campaigns;

        return $this;
    }

    /**
     * @return GetChangesIntData
     */
    public function getBanners()
    {
        return $this->Banners;
    }

    /**
     * @param GetChangesIntData $Banners
     * @return GetChangesResponse
     */
    public function setBanners(GetChangesIntData $Banners)
    {
        $this->Banners = $Banners;

        return $this;
    }

    /**
     * @return GetChangesStringData
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * @param GetChangesStringData $Logins
     * @return GetChangesResponse
     */
    public function setLogins(GetChangesStringData $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * @return CampaignStatChangeItem[]
     */
    public function getCampaignsStatChange()
    {
        return $this->CampaignsStatChange;
    }

    /**
     * @param CampaignStatChangeItem[] $CampaignsStatChange
     * @return GetChangesResponse
     */
    public function setCampaignsStatChange(array $CampaignsStatChange)
    {
        $this->CampaignsStatChange = $CampaignsStatChange;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * @param string $Timestamp
     * @return GetChangesResponse
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getRubricsChanged()
    {
        return $this->RubricsChanged;
    }

    /**
     * @param string $RubricsChanged
     * @return GetChangesResponse
     */
    public function setRubricsChanged($RubricsChanged)
    {
        $this->RubricsChanged = $RubricsChanged;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZonesChanged()
    {
        return $this->TimeZonesChanged;
    }

    /**
     * @param string $TimeZonesChanged
     * @return GetChangesResponse
     */
    public function setTimeZonesChanged($TimeZonesChanged)
    {
        $this->TimeZonesChanged = $TimeZonesChanged;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegionsChanged()
    {
        return $this->RegionsChanged;
    }

    /**
     * @param string $RegionsChanged
     * @return GetChangesResponse
     */
    public function setRegionsChanged($RegionsChanged)
    {
        $this->RegionsChanged = $RegionsChanged;

        return $this;
    }
}