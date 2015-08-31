<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class BannerPhrasesFilterRequestInfo
{
    /**
     * @var int[]
     */
    protected $BannerIDS;
    /**
     * @var string[]
     */
    protected $FieldsNames;
    /**
     * @var string
     */
    protected $ConsiderTimeTarget;
    /**
     * @var string
     */
    protected $RequestPrices;
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
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

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
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setFieldsNames(array $FieldsNames)
    {
        $this->FieldsNames = $FieldsNames;

        return $this;
    }

    /**
     * Gets the ConsiderTimeTarget.
     *
     * @return string
     */
    public function getConsiderTimeTarget()
    {
        return $this->ConsiderTimeTarget;
    }

    /**
     * Sets the ConsiderTimeTarget.
     *
     * @param string $ConsiderTimeTarget
     *
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setConsiderTimeTarget($ConsiderTimeTarget)
    {
        $this->ConsiderTimeTarget = $ConsiderTimeTarget;

        return $this;
    }

    /**
     * Gets the RequestPrices.
     *
     * @return string
     */
    public function getRequestPrices()
    {
        return $this->RequestPrices;
    }

    /**
     * Sets the RequestPrices.
     *
     * @param string $RequestPrices
     *
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setRequestPrices($RequestPrices)
    {
        $this->RequestPrices = $RequestPrices;

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
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}