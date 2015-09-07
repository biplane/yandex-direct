<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetChangesResponse
{

    protected $Campaigns = null;

    protected $Banners = null;

    protected $Logins = null;

    protected $CampaignsStatChange = null;

    protected $Timestamp = null;

    protected $RubricsChanged = null;

    protected $TimeZonesChanged = null;

    protected $RegionsChanged = null;

    /**
     * Creates a new instance of GetChangesResponse.
     *
     * @return GetChangesResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Campaigns.
     *
     * @return GetChangesIntData|null
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * Sets Campaigns.
     *
     * @param GetChangesIntData|null $value
     * @return $this
     */
    public function setCampaigns(GetChangesIntData $value = null)
    {
        $this->Campaigns = $value;

        return $this;
    }

    /**
     * Gets Banners.
     *
     * @return GetChangesIntData|null
     */
    public function getBanners()
    {
        return $this->Banners;
    }

    /**
     * Sets Banners.
     *
     * @param GetChangesIntData|null $value
     * @return $this
     */
    public function setBanners(GetChangesIntData $value = null)
    {
        $this->Banners = $value;

        return $this;
    }

    /**
     * Gets Logins.
     *
     * @return GetChangesStringData|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param GetChangesStringData|null $value
     * @return $this
     */
    public function setLogins(GetChangesStringData $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets CampaignsStatChange.
     *
     * @return CampaignStatChangeItem[]|null
     */
    public function getCampaignsStatChange()
    {
        return $this->CampaignsStatChange;
    }

    /**
     * Sets CampaignsStatChange.
     *
     * @param array|null $value
     * @return $this
     */
    public function setCampaignsStatChange(array $value = null)
    {
        $this->CampaignsStatChange = $value;

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

    /**
     * Gets RubricsChanged.
     *
     * @return string|null
     */
    public function getRubricsChanged()
    {
        return $this->RubricsChanged;
    }

    /**
     * Sets RubricsChanged.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRubricsChanged($value = null)
    {
        $this->RubricsChanged = $value;

        return $this;
    }

    /**
     * Gets TimeZonesChanged.
     *
     * @return string|null
     */
    public function getTimeZonesChanged()
    {
        return $this->TimeZonesChanged;
    }

    /**
     * Sets TimeZonesChanged.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTimeZonesChanged($value = null)
    {
        $this->TimeZonesChanged = $value;

        return $this;
    }

    /**
     * Gets RegionsChanged.
     *
     * @return string|null
     */
    public function getRegionsChanged()
    {
        return $this->RegionsChanged;
    }

    /**
     * Sets RegionsChanged.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRegionsChanged($value = null)
    {
        $this->RegionsChanged = $value;

        return $this;
    }


}

