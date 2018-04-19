<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidsSelectionCriteria
{

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $KeywordIds = null;

//    Can be omit.
//    protected $ServingStatuses = null;

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
     * Gets KeywordIds.
     *
     * @return int[]|null
     */
    public function getKeywordIds()
    {
        return isset($this->KeywordIds) ? $this->KeywordIds : null;
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
        return isset($this->ServingStatuses) ? $this->ServingStatuses : null;
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

