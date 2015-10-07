<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannerPhrasesFilterRequestInfo
{

    protected $BannerIDS = array(
        
    );

    protected $FieldsNames = null;

    protected $ConsiderTimeTarget = null;

    protected $RequestPrices = null;

    protected $Currency = null;

    /**
     * Creates a new instance of BannerPhrasesFilterRequestInfo.
     *
     * @return BannerPhrasesFilterRequestInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BannerIDS.
     *
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets BannerIDS.
     *
     * @param int[] $value
     * @return $this
     */
    public function setBannerIDS(array $value)
    {
        $this->BannerIDS = $value;

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
     * @param string[]|null $value
     * @return $this
     */
    public function setFieldsNames(array $value = null)
    {
        $this->FieldsNames = $value;

        return $this;
    }

    /**
     * Gets ConsiderTimeTarget.
     *
     * @return string|null
     */
    public function getConsiderTimeTarget()
    {
        return $this->ConsiderTimeTarget;
    }

    /**
     * Sets ConsiderTimeTarget.
     *
     * @param string|null $value
     * @return $this
     */
    public function setConsiderTimeTarget($value = null)
    {
        $this->ConsiderTimeTarget = $value;

        return $this;
    }

    /**
     * Gets RequestPrices.
     *
     * @return string|null
     */
    public function getRequestPrices()
    {
        return $this->RequestPrices;
    }

    /**
     * Sets RequestPrices.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRequestPrices($value = null)
    {
        $this->RequestPrices = $value;

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

