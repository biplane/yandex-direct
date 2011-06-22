<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class CampaignsFilterInfo
{
    /**
     * @var string[]
     */
    protected $StatusModerate;
    /**
     * @var string[]
     */
    protected $IsActive;
    /**
     * @var string[]
     */
    protected $StatusArchive;
    /**
     * @var string[]
     */
    protected $StatusActivating;
    /**
     * @var string[]
     */
    protected $StatusShow;

    /**
     * @return string[]
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * @param string[] $StatusModerate
     * @return CampaignsFilterInfo
     */
    public function setStatusModerate(array $StatusModerate)
    {
        $this->StatusModerate = $StatusModerate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param string[] $IsActive
     * @return CampaignsFilterInfo
     */
    public function setIsActive(array $IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * @param string[] $StatusArchive
     * @return CampaignsFilterInfo
     */
    public function setStatusArchive(array $StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * @param string[] $StatusActivating
     * @return CampaignsFilterInfo
     */
    public function setStatusActivating(array $StatusActivating)
    {
        $this->StatusActivating = $StatusActivating;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * @param string[] $StatusShow
     * @return CampaignsFilterInfo
     */
    public function setStatusShow(array $StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }
}