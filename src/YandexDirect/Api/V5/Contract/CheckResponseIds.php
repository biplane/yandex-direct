<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckResponseIds
{

    protected $CampaignIds = null;

    protected $AdGroupIds = null;

    protected $AdIds = null;

    /**
     * Creates a new instance of CheckResponseIds.
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
        return $this->CampaignIds;
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
        return $this->AdGroupIds;
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
        return $this->AdIds;
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


}

