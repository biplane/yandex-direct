<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetCampaignsInfo
{
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var CampaignsFilterInfo
     */
    protected $Filter;
    /**
     * @var int
     */
    protected $Limit;
    /**
     * @var int
     */
    protected $Offset;
    /**
     * @var string
     */
    protected $CurrencySupported;

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
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return GetCampaignsInfo
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the Filter.
     *
     * @return CampaignsFilterInfo
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets the Filter.
     *
     * @param CampaignsFilterInfo $Filter
     *
     * @return GetCampaignsInfo
     */
    public function setFilter(CampaignsFilterInfo $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param int $Limit
     *
     * @return GetCampaignsInfo
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the Offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets the Offset.
     *
     * @param int $Offset
     *
     * @return GetCampaignsInfo
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }

    /**
     * Gets the CurrencySupported.
     *
     * @return string
     */
    public function getCurrencySupported()
    {
        return $this->CurrencySupported;
    }

    /**
     * Sets the CurrencySupported.
     *
     * @param string $CurrencySupported
     *
     * @return GetCampaignsInfo
     */
    public function setCurrencySupported($CurrencySupported)
    {
        $this->CurrencySupported = $CurrencySupported;

        return $this;
    }
}