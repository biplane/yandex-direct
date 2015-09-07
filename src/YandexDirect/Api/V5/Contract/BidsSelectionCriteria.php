<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidsSelectionCriteria
{

    protected $CampaignIds = null;

    protected $AdGroupIds = null;

    protected $KeywordIds = null;

    /**
     * Creates a new instance of BidsSelectionCriteria.
     *
     * @return BidsSelectionCriteria
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
     * Gets KeywordIds.
     *
     * @return long[]|null
     */
    public function getKeywordIds()
    {
        return $this->KeywordIds;
    }

    /**
     * Sets KeywordIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setKeywordIds(array $value = null)
    {
        $this->KeywordIds = $value;

        return $this;
    }


}

