<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * @var int[]
     */
    protected $TagIDS;
    /**
     * @var string[]
     */
    protected $Tags;
    /**
     * @var string[]
     */
    protected $StatusAdImageModerate;

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
     * Gets the StatusPhoneModerate.
     *
     * @return string[]
     */
    public function getStatusPhoneModerate()
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * Sets the StatusPhoneModerate.
     *
     * @param string[] $StatusPhoneModerate
     *
     * @return BannersFilterInfo
     */
    public function setStatusPhoneModerate(array $StatusPhoneModerate)
    {
        $this->StatusPhoneModerate = $StatusPhoneModerate;

        return $this;
    }

    /**
     * Gets the StatusBannerModerate.
     *
     * @return string[]
     */
    public function getStatusBannerModerate()
    {
        return $this->StatusBannerModerate;
    }

    /**
     * Sets the StatusBannerModerate.
     *
     * @param string[] $StatusBannerModerate
     *
     * @return BannersFilterInfo
     */
    public function setStatusBannerModerate(array $StatusBannerModerate)
    {
        $this->StatusBannerModerate = $StatusBannerModerate;

        return $this;
    }

    /**
     * Gets the StatusPhrasesModerate.
     *
     * @return string[]
     */
    public function getStatusPhrasesModerate()
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * Sets the StatusPhrasesModerate.
     *
     * @param string[] $StatusPhrasesModerate
     *
     * @return BannersFilterInfo
     */
    public function setStatusPhrasesModerate(array $StatusPhrasesModerate)
    {
        $this->StatusPhrasesModerate = $StatusPhrasesModerate;

        return $this;
    }

    /**
     * Gets the StatusActivating.
     *
     * @return string[]
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets the StatusActivating.
     *
     * @param string[] $StatusActivating
     *
     * @return BannersFilterInfo
     */
    public function setStatusActivating(array $StatusActivating)
    {
        $this->StatusActivating = $StatusActivating;

        return $this;
    }

    /**
     * Gets the StatusShow.
     *
     * @return string[]
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets the StatusShow.
     *
     * @param string[] $StatusShow
     *
     * @return BannersFilterInfo
     */
    public function setStatusShow(array $StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }

    /**
     * Gets the IsActive.
     *
     * @return string[]
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets the IsActive.
     *
     * @param string[] $IsActive
     *
     * @return BannersFilterInfo
     */
    public function setIsActive(array $IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * Gets the StatusArchive.
     *
     * @return string[]
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets the StatusArchive.
     *
     * @param string[] $StatusArchive
     *
     * @return BannersFilterInfo
     */
    public function setStatusArchive(array $StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }

    /**
     * Gets the TagIDS.
     *
     * @return int[]
     */
    public function getTagIDS()
    {
        return $this->TagIDS;
    }

    /**
     * Sets the TagIDS.
     *
     * @param int[] $TagIDS
     *
     * @return BannersFilterInfo
     */
    public function setTagIDS(array $TagIDS)
    {
        $this->TagIDS = $TagIDS;

        return $this;
    }

    /**
     * Gets the Tags.
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Sets the Tags.
     *
     * @param string[] $Tags
     *
     * @return BannersFilterInfo
     */
    public function setTags(array $Tags)
    {
        $this->Tags = $Tags;

        return $this;
    }

    /**
     * Gets the StatusAdImageModerate.
     *
     * @return string[]
     */
    public function getStatusAdImageModerate()
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets the StatusAdImageModerate.
     *
     * @param string[] $StatusAdImageModerate
     *
     * @return BannersFilterInfo
     */
    public function setStatusAdImageModerate(array $StatusAdImageModerate)
    {
        $this->StatusAdImageModerate = $StatusAdImageModerate;

        return $this;
    }
}