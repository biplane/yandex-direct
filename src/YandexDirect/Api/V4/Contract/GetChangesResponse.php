<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Campaigns.
     *
     * @return GetChangesIntData
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * Sets the Campaigns.
     *
     * @param GetChangesIntData $Campaigns
     *
     * @return GetChangesResponse
     */
    public function setCampaigns(GetChangesIntData $Campaigns)
    {
        $this->Campaigns = $Campaigns;

        return $this;
    }

    /**
     * Gets the Banners.
     *
     * @return GetChangesIntData
     */
    public function getBanners()
    {
        return $this->Banners;
    }

    /**
     * Sets the Banners.
     *
     * @param GetChangesIntData $Banners
     *
     * @return GetChangesResponse
     */
    public function setBanners(GetChangesIntData $Banners)
    {
        $this->Banners = $Banners;

        return $this;
    }

    /**
     * Gets the Logins.
     *
     * @return GetChangesStringData
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param GetChangesStringData $Logins
     *
     * @return GetChangesResponse
     */
    public function setLogins(GetChangesStringData $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the CampaignsStatChange.
     *
     * @return CampaignStatChangeItem[]
     */
    public function getCampaignsStatChange()
    {
        return $this->CampaignsStatChange;
    }

    /**
     * Sets the CampaignsStatChange.
     *
     * @param CampaignStatChangeItem[] $CampaignsStatChange
     *
     * @return GetChangesResponse
     */
    public function setCampaignsStatChange(array $CampaignsStatChange)
    {
        $this->CampaignsStatChange = $CampaignsStatChange;

        return $this;
    }

    /**
     * Gets the Timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string $Timestamp
     *
     * @return GetChangesResponse
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }

    /**
     * Gets the RubricsChanged.
     *
     * @return string
     */
    public function getRubricsChanged()
    {
        return $this->RubricsChanged;
    }

    /**
     * Sets the RubricsChanged.
     *
     * @param string $RubricsChanged
     *
     * @return GetChangesResponse
     */
    public function setRubricsChanged($RubricsChanged)
    {
        $this->RubricsChanged = $RubricsChanged;

        return $this;
    }

    /**
     * Gets the TimeZonesChanged.
     *
     * @return string
     */
    public function getTimeZonesChanged()
    {
        return $this->TimeZonesChanged;
    }

    /**
     * Sets the TimeZonesChanged.
     *
     * @param string $TimeZonesChanged
     *
     * @return GetChangesResponse
     */
    public function setTimeZonesChanged($TimeZonesChanged)
    {
        $this->TimeZonesChanged = $TimeZonesChanged;

        return $this;
    }

    /**
     * Gets the RegionsChanged.
     *
     * @return string
     */
    public function getRegionsChanged()
    {
        return $this->RegionsChanged;
    }

    /**
     * Sets the RegionsChanged.
     *
     * @param string $RegionsChanged
     *
     * @return GetChangesResponse
     */
    public function setRegionsChanged($RegionsChanged)
    {
        $this->RegionsChanged = $RegionsChanged;

        return $this;
    }
}