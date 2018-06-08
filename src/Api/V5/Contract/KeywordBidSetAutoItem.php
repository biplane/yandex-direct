<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidSetAutoItem
{

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $KeywordId = null;

    protected $BiddingRule = null;

    /**
     * Creates a new instance of KeywordBidSetAutoItem.
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
        return isset($this->CampaignId) ? $this->CampaignId : null;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->KeywordId) ? $this->KeywordId : null;
    }

    /**
     * Sets KeywordId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setKeywordId($value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }

    /**
     * Gets BiddingRule.
     *
     * @return BiddingRule
     */
    public function getBiddingRule()
    {
        return $this->BiddingRule;
    }

    /**
     * Sets BiddingRule.
     *
     * @param BiddingRule $value
     * @return $this
     */
    public function setBiddingRule(BiddingRule $value)
    {
        $this->BiddingRule = $value;

        return $this;
    }


}

