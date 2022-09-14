<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetForecastInfo
{
    protected $Categories = [];

    protected $Phrases = [];

    protected $Common = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return BannerPhraseInfo[]
     */
    public function getCategories(): array
    {
        return $this->Categories;
    }

    /**
     * @param BannerPhraseInfo[] $value
     *
     * @return $this
     */
    public function setCategories(array $value)
    {
        $this->Categories = $value;

        return $this;
    }

    /**
     * @return BannerPhraseInfo[]
     */
    public function getPhrases(): array
    {
        return $this->Phrases;
    }

    /**
     * @param BannerPhraseInfo[] $value
     *
     * @return $this
     */
    public function setPhrases(array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    public function getCommon(): ForecastCommonInfo
    {
        return $this->Common;
    }

    /**
     * @return $this
     */
    public function setCommon(ForecastCommonInfo $value)
    {
        $this->Common = $value;

        return $this;
    }
}
