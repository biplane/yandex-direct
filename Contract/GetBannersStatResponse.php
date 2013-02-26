<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetBannersStatResponse
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $StartDate;
    /**
     * @var string
     */
    protected $EndDate;
    /**
     * @var BannersStatItem[]
     */
    protected $Stat;

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
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return GetBannersStatResponse
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets the StartDate.
     *
     * @param string $StartDate
     *
     * @return GetBannersStatResponse
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * Gets the EndDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets the EndDate.
     *
     * @param string $EndDate
     *
     * @return GetBannersStatResponse
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * Gets the Stat.
     *
     * @return BannersStatItem[]
     */
    public function getStat()
    {
        return $this->Stat;
    }

    /**
     * Sets the Stat.
     *
     * @param BannersStatItem[] $Stat
     *
     * @return GetBannersStatResponse
     */
    public function setStat(array $Stat)
    {
        $this->Stat = $Stat;

        return $this;
    }
}