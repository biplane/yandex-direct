<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetBannersInfo
{

    protected $CampaignIDS = null;

    protected $BannerIDS = null;

    protected $Filter = null;

    protected $GetPhrases = null;

    protected $FieldsNames = null;

    protected $Limit = null;

    protected $Offset = null;

    protected $Currency = null;

    protected $AuctionBids = null;

    /**
     * Creates a new instance of GetBannersInfo.
     *
     * @return GetBannersInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setCampaignIDS(array $value = null)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Gets BannerIDS.
     *
     * @return int[]|null
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets BannerIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setBannerIDS(array $value = null)
    {
        $this->BannerIDS = $value;

        return $this;
    }

    /**
     * Gets Filter.
     *
     * @return BannersFilterInfo|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @param BannersFilterInfo|null $value
     * @return $this
     */
    public function setFilter(BannersFilterInfo $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Gets GetPhrases.
     *
     * @return string|null
     */
    public function getGetPhrases()
    {
        return $this->GetPhrases;
    }

    /**
     * Sets GetPhrases.
     *
     * @param string|null $value
     * @return $this
     */
    public function setGetPhrases($value = null)
    {
        $this->GetPhrases = $value;

        return $this;
    }

    /**
     * Gets FieldsNames.
     *
     * @return string[]|null
     */
    public function getFieldsNames()
    {
        return $this->FieldsNames;
    }

    /**
     * Sets FieldsNames.
     *
     * @param array|null $value
     * @return $this
     */
    public function setFieldsNames(array $value = null)
    {
        $this->FieldsNames = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

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

    /**
     * Gets AuctionBids.
     *
     * @return string|null
     */
    public function getAuctionBids()
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAuctionBids($value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }


}

