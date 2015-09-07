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
     * @return CheckResponseIds
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return long[]|null
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * Sets CampaignIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets AdGroupIds.
     *
     * @return long[]|null
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setAdGroupIds(array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets AdIds.
     *
     * @return long[]|null
     */
    public function getAdIds()
    {
        return $this->AdIds;
    }

    /**
     * Sets AdIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setAdIds(array $value = null)
    {
        $this->AdIds = $value;

        return $this;
    }


}

