<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * @param string[] $Logins
     * @return GetCampaignsInfo
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * @return CampaignsFilterInfo
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param CampaignsFilterInfo $Filter
     * @return GetCampaignsInfo
     */
    public function setFilter(CampaignsFilterInfo $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * @param int $Limit
     * @return GetCampaignsInfo
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * @param int $Offset
     * @return GetCampaignsInfo
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }
}