<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignIDInfo
{

    protected $CampaignID = null;

    protected $Currency = null;

    /**
     * Creates a new instance of CampaignIDInfo.
     *
     * @return CampaignIDInfo
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
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

