<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Categories.
     *
     * @return BannerPhraseInfo[]
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * Sets the Categories.
     *
     * @param BannerPhraseInfo[] $Categories
     *
     * @return GetForecastInfo
     */
    public function setCategories(array $Categories)
    {
        $this->Categories = $Categories;

        return $this;
    }

    /**
     * Gets the Phrases.
     *
     * @return BannerPhraseInfo[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets the Phrases.
     *
     * @param BannerPhraseInfo[] $Phrases
     *
     * @return GetForecastInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

        return $this;
    }

    /**
     * Gets the Common.
     *
     * @return ForecastCommonInfo
     */
    public function getCommon()
    {
        return $this->Common;
    }

    /**
     * Sets the Common.
     *
     * @param ForecastCommonInfo $Common
     *
     * @return GetForecastInfo
     */
    public function setCommon(ForecastCommonInfo $Common)
    {
        $this->Common = $Common;

        return $this;
    }
}