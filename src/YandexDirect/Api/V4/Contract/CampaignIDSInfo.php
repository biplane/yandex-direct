<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignIDSInfo
{

    protected $CampaignIDS = array(
        
    );

    protected $Currency = null;

    /**
     * Creates a new instance of CampaignIDSInfo.
     *
     * @return CampaignIDSInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[] $value
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

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

