<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidBase
{

    protected $CampaignId = null;

    protected $AdGroupId = null;

    protected $KeywordId = null;

    /**
     * Creates a new instance of BidBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return self
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets KeywordId.
     *
     * @return int|null
     */
    public function getKeywordId()
    {
        return $this->KeywordId;
    }

    /**
     * Sets KeywordId.
     *
     * @param int|null $value
     * @return self
     */
    public function setKeywordId($value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }


}

