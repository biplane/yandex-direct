<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidsSelectionCriteria
{

    protected $CampaignIds = null;

    protected $AdGroupIds = null;

    protected $KeywordIds = null;

    protected $ServingStatuses = null;

    /**
     * Creates a new instance of KeywordBidsSelectionCriteria.
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
     * Gets KeywordIds.
     *
     * @return int[]|null
     */
    public function getKeywordIds()
    {
        return $this->KeywordIds;
    }

    /**
     * Sets KeywordIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setKeywordIds(array $value = null)
    {
        $this->KeywordIds = $value;

        return $this;
    }

    /**
     * Gets ServingStatuses.
     *
     * @return string[]|null
     * @see ServingStatusEnum
     */
    public function getServingStatuses()
    {
        return $this->ServingStatuses;
    }

    /**
     * Sets ServingStatuses.
     *
     * @param string[]|null $value
     * @return self
     * @see ServingStatusEnum
     */
    public function setServingStatuses(array $value = null)
    {
        $this->ServingStatuses = $value;

        return $this;
    }


}

