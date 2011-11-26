<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * @param int[] $BannerIDS
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFieldsNames()
    {
        return $this->FieldsNames;
    }

    /**
     * @param string[] $FieldsNames
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setFieldsNames(array $FieldsNames)
    {
        $this->FieldsNames = $FieldsNames;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsiderTimeTarget()
    {
        return $this->ConsiderTimeTarget;
    }

    /**
     * @param string $ConsiderTimeTarget
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setConsiderTimeTarget($ConsiderTimeTarget)
    {
        $this->ConsiderTimeTarget = $ConsiderTimeTarget;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestPrices()
    {
        return $this->RequestPrices;
    }

    /**
     * @param string $RequestPrices
     * @return BannerPhrasesFilterRequestInfo
     */
    public function setRequestPrices($RequestPrices)
    {
        $this->RequestPrices = $RequestPrices;

        return $this;
    }
}