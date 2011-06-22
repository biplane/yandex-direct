<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class BannersFilterInfo
{
    /**
     * @var string[]
     */
    protected $StatusPhoneModerate;
    /**
     * @var string[]
     */
    protected $StatusBannerModerate;
    /**
     * @var string[]
     */
    protected $StatusPhrasesModerate;
    /**
     * @var string[]
     */
    protected $StatusActivating;
    /**
     * @var string[]
     */
    protected $StatusShow;
    /**
     * @var string[]
     */
    protected $IsActive;
    /**
     * @var string[]
     */
    protected $StatusArchive;

    /**
     * @return string[]
     */
    public function getStatusPhoneModerate()
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * @param string[] $StatusPhoneModerate
     * @return BannersFilterInfo
     */
    public function setStatusPhoneModerate(array $StatusPhoneModerate)
    {
        $this->StatusPhoneModerate = $StatusPhoneModerate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusBannerModerate()
    {
        return $this->StatusBannerModerate;
    }

    /**
     * @param string[] $StatusBannerModerate
     * @return BannersFilterInfo
     */
    public function setStatusBannerModerate(array $StatusBannerModerate)
    {
        $this->StatusBannerModerate = $StatusBannerModerate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStatusPhrasesModerate()
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * @param string[] $StatusPhrasesModerate
     * @return BannersFilterInfo
     */
    public function setStatusPhrasesModerate(array $StatusPhrasesModerate)
    {
        $this->StatusPhrasesModerate = $StatusPhrasesModerate;

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
     * @return BannersFilterInfo
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
     * @return BannersFilterInfo
     */
    public function setStatusShow(array $StatusShow)
    {
        $this->StatusShow = $StatusShow;

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
     * @return BannersFilterInfo
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
     * @return BannersFilterInfo
     */
    public function setStatusArchive(array $StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }
}