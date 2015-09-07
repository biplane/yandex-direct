<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignsFilterInfo
{

    protected $StatusModerate = null;

    protected $IsActive = null;

    protected $StatusArchive = null;

    protected $StatusActivating = null;

    protected $StatusShow = null;

    /**
     * Creates a new instance of CampaignsFilterInfo.
     *
     * @return CampaignsFilterInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets StatusModerate.
     *
     * @return string[]|null
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * Sets StatusModerate.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStatusModerate(array $value = null)
    {
        $this->StatusModerate = $value;

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


}

