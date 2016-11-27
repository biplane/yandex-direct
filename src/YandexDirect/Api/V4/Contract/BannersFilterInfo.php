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
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param int[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
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
     * @param string[]|null $value
     * @return self
     */
    public function setStatusAdImageModerate(array $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }


}

