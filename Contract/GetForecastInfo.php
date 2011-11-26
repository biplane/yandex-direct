<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetForecastInfo
{
    /**
     * @var BannerPhraseInfo[]
     */
    protected $Categories;
    /**
     * @var BannerPhraseInfo[]
     */
    protected $Phrases;
    /**
     * @var ForecastCommonInfo
     */
    protected $Common;

    /**
     * @return BannerPhraseInfo[]
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param BannerPhraseInfo[] $Categories
     * @return GetForecastInfo
     */
    public function setCategories(array $Categories)
    {
        $this->Categories = $Categories;

        return $this;
    }

    /**
     * @return BannerPhraseInfo[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * @param BannerPhraseInfo[] $Phrases
     * @return GetForecastInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

        return $this;
    }

    /**
     * @return ForecastCommonInfo
     */
    public function getCommon()
    {
        return $this->Common;
    }

    /**
     * @param ForecastCommonInfo $Common
     * @return GetForecastInfo
     */
    public function setCommon(ForecastCommonInfo $Common)
    {
        $this->Common = $Common;

        return $this;
    }
}