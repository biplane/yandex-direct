<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetBannersStatResponse
{

    protected $CampaignID = null;

    protected $StartDate = null;

    protected $EndDate = null;

    protected $Stat = null;

    /**
     * Creates a new instance of GetBannersStatResponse.
     *
     * @return GetBannersStatResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @param string $value
     * @return $this
     */
    public function setEndDate($value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets Stat.
     *
     * @return BannersStatItem[]|null
     */
    public function getStat()
    {
        return $this->Stat;
    }

    /**
     * Sets Stat.
     *
     * @param array|null $value
     * @return $this
     */
    public function setStat(array $value = null)
    {
        $this->Stat = $value;

        return $this;
    }


}

