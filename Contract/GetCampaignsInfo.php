<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
}