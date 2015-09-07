<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannersFilterInfo
{

    protected $StatusPhoneModerate = null;

    protected $StatusBannerModerate = null;

    protected $StatusPhrasesModerate = null;

    protected $StatusActivating = null;

    protected $StatusShow = null;

    protected $IsActive = null;

    protected $StatusArchive = null;

    protected $TagIDS = null;

    protected $Tags = null;

    protected $StatusAdImageModerate = null;

    /**
     * Creates a new instance of BannersFilterInfo.
     *
     * @return BannersFilterInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets StatusPhoneModerate.
     *
     * @return string[]|null
     */
    public function getStatusPhoneModerate()
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * Sets StatusPhoneModerate.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusPhoneModerate(array $value = null)
    {
        $this->StatusPhoneModerate = $value;

        return $this;
    }

    /**
     * Gets StatusBannerModerate.
     *
     * @return string[]|null
     */
    public function getStatusBannerModerate()
    {
        return $this->StatusBannerModerate;
    }

    /**
     * Sets StatusBannerModerate.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusBannerModerate(array $value = null)
    {
        $this->StatusBannerModerate = $value;

        return $this;
    }

    /**
     * Gets StatusPhrasesModerate.
     *
     * @return string[]|null
     */
    public function getStatusPhrasesModerate()
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * Sets StatusPhrasesModerate.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusPhrasesModerate(array $value = null)
    {
        $this->StatusPhrasesModerate = $value;

        return $this;
    }

    /**
     * Gets StatusActivating.
     *
     * @return string[]|null
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets StatusActivating.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusActivating(array $value = null)
    {
        $this->StatusActivating = $value;

        return $this;
    }

    /**
     * Gets StatusShow.
     *
     * @return string[]|null
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets StatusShow.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusShow(array $value = null)
    {
        $this->StatusShow = $value;

        return $this;
    }

    /**
     * Gets IsActive.
     *
     * @return string[]|null
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets IsActive.
     *
     * @param array|null $value
     * @return $this
     */
    public function setIsActive(array $value = null)
    {
        $this->IsActive = $value;

        return $this;
    }

    /**
     * Gets StatusArchive.
     *
     * @return string[]|null
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets StatusArchive.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusArchive(array $value = null)
    {
        $this->StatusArchive = $value;

        return $this;
    }

    /**
     * Gets TagIDS.
     *
     * @return int[]|null
     */
    public function getTagIDS()
    {
        return $this->TagIDS;
    }

    /**
     * Sets TagIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setTagIDS(array $value = null)
    {
        $this->TagIDS = $value;

        return $this;
    }

    /**
     * Gets Tags.
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Sets Tags.
     *
     * @param array|null $value
     * @return $this
     */
    public function setTags(array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }

    /**
     * Gets StatusAdImageModerate.
     *
     * @return string[]|null
     */
    public function getStatusAdImageModerate()
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets StatusAdImageModerate.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusAdImageModerate(array $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }


}

