<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetBannersInfo
{
    const GETPHRASES_NO = 'No';
    const GETPHRASES_YES = 'Yes';
    const GETPHRASES_WITHPRICES = 'WithPrices';

    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var int[]
     */
    protected $BannerIDS;
    /**
     * @var BannersFilterInfo
     */
    protected $Filter;
    /**
     * @var string
     */
    protected $GetPhrases;
    /**
     * @var string[]
     */
    protected $FieldsNames;
    /**
     * @var int
     */
    protected $Limit;
    /**
     * @var int
     */
    protected $Offset;
    /**
     * @var string
     */
    protected $Currency;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets the CampaignIDS.
     *
     * @param int[] $CampaignIDS
     *
     * @return GetBannersInfo
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

        return $this;
    }

    /**
     * Gets the BannerIDS.
     *
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets the BannerIDS.
     *
     * @param int[] $BannerIDS
     *
     * @return GetBannersInfo
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * Gets the Filter.
     *
     * @return BannersFilterInfo
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets the Filter.
     *
     * @param BannersFilterInfo $Filter
     *
     * @return GetBannersInfo
     */
    public function setFilter(BannersFilterInfo $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * Gets the GetPhrases.
     *
     * @return string
     */
    public function getGetPhrases()
    {
        return $this->GetPhrases;
    }

    /**
     * Sets the GetPhrases.
     *
     * @param string $GetPhrases
     *
     * @return GetBannersInfo
     */
    public function setGetPhrases($GetPhrases)
    {
        $this->GetPhrases = $GetPhrases;

        return $this;
    }

    /**
     * Gets the FieldsNames.
     *
     * @return string[]
     */
    public function getFieldsNames()
    {
        return $this->FieldsNames;
    }

    /**
     * Sets the FieldsNames.
     *
     * @param string[] $FieldsNames
     *
     * @return GetBannersInfo
     */
    public function setFieldsNames(array $FieldsNames)
    {
        $this->FieldsNames = $FieldsNames;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param int $Limit
     *
     * @return GetBannersInfo
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the Offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets the Offset.
     *
     * @param int $Offset
     *
     * @return GetBannersInfo
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return GetBannersInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}