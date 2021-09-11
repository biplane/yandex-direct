<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetForecastInfo
{
    protected $Categories = [];

    protected $Phrases = [];

    protected $Common = null;

    /**
     * Creates a new instance of GetForecastInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Categories.
     *
     * @return BannerPhraseInfo[]
     */
    public function getCategories(): array
    {
        return $this->Categories;
    }

    /**
     * Sets Categories.
     *
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
     * Gets Phrases.
     *
     * @return BannerPhraseInfo[]
     */
    public function getPhrases(): array
    {
        return $this->Phrases;
    }

    /**
     * Sets Phrases.
     *
     * @param BannerPhraseInfo[] $value
     *
     * @return $this
     */
    public function setPhrases(array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Gets Common.
     */
    public function getCommon(): ForecastCommonInfo
    {
        return $this->Common;
    }

    /**
     * Sets Common.
     *
     * @return $this
     */
    public function setCommon(ForecastCommonInfo $value)
    {
        $this->Common = $value;

        return $this;
    }
}
