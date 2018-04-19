<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckResponseModified
{

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $AdIds = null;

//    Can be omit.
//    protected $CampaignsStat = null;

    /**
     * Creates a new instance of CheckResponseModified.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return isset($this->CampaignIds) ? $this->CampaignIds : null;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return isset($this->AdGroupIds) ? $this->AdGroupIds : null;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setAdGroupIds(array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets AdIds.
     *
     * @return int[]|null
     */
    public function getAdIds()
    {
        return isset($this->AdIds) ? $this->AdIds : null;
    }

    /**
     * Sets AdIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setAdIds(array $value = null)
    {
        $this->AdIds = $value;

        return $this;
    }

    /**
     * Gets CampaignsStat.
     *
     * @return CampaignStatItem[]|null
     */
    public function getCampaignsStat()
    {
        return isset($this->CampaignsStat) ? $this->CampaignsStat : null;
    }

    /**
     * Sets CampaignsStat.
     *
     * @param CampaignStatItem[]|null $value
     * @return self
     */
    public function setCampaignsStat(array $value = null)
    {
        $this->CampaignsStat = $value;

        return $this;
    }


}

