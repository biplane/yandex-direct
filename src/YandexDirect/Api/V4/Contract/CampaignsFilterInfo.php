<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the StatusModerate.
     *
     * @return string[]
     */
    public function getStatusModerate()
    {
        return $this->StatusModerate;
    }

    /**
     * Sets the StatusModerate.
     *
     * @param string[] $StatusModerate
     *
     * @return CampaignsFilterInfo
     */
    public function setStatusModerate(array $StatusModerate)
    {
        $this->StatusModerate = $StatusModerate;

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
     * @return CampaignsFilterInfo
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
     * @return CampaignsFilterInfo
     */
    public function setStatusArchive(array $StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

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
     * @return CampaignsFilterInfo
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
     * @return CampaignsFilterInfo
     */
    public function setStatusShow(array $StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }
}