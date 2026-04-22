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
//    Can be omitted.
//    protected $Categories;

//    Can be omitted.
//    protected $Phrases;

    /** @var ForecastCommonInfo */
    protected $Common;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Categories
     *
     * @return list<BannerPhraseInfo>
     */
    public function getCategories(): array
    {
        return $this->Categories ?? [];
    }

    /**
     * Set Categories
     *
     * @param list<BannerPhraseInfo> $value
     *
     * @return $this
     */
    public function setCategories(array $value)
    {
        $this->Categories = $value;

        return $this;
    }

    /**
     * Get Phrases
     *
     * @return list<BannerPhraseInfo>
     */
    public function getPhrases(): array
    {
        return $this->Phrases ?? [];
    }

    /**
     * Set Phrases
     *
     * @param list<BannerPhraseInfo> $value
     *
     * @return $this
     */
    public function setPhrases(array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Get Common
     */
    public function getCommon(): ForecastCommonInfo
    {
        return $this->Common;
    }

    /**
     * Set Common
     *
     * @return $this
     */
    public function setCommon(ForecastCommonInfo $value)
    {
        $this->Common = $value;

        return $this;
    }
}
