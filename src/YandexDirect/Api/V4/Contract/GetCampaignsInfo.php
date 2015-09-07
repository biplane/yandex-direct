<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsInfo
{

    protected $Logins = null;

    protected $Filter = null;

    protected $Limit = null;

    protected $Offset = null;

    protected $CurrencySupported = null;

    /**
     * Creates a new instance of GetCampaignsInfo.
     *
     * @return GetCampaignsInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param array|null $value
     * @return $this
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets Filter.
     *
     * @return CampaignsFilterInfo|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @param CampaignsFilterInfo|null $value
     * @return $this
     */
    public function setFilter(CampaignsFilterInfo $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

        return $this;
    }

    /**
     * Gets CurrencySupported.
     *
     * @return string|null
     */
    public function getCurrencySupported()
    {
        return $this->CurrencySupported;
    }

    /**
     * Sets CurrencySupported.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrencySupported($value = null)
    {
        $this->CurrencySupported = $value;

        return $this;
    }


}

