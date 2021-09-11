<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdsRequest
{
    protected $Ads = [];

    /**
     * Creates a new instance of UpdateAdsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Ads.
     *
     * @return AdUpdateItem[]
     */
    public function getAds(): array
    {
        return $this->Ads;
    }

    /**
     * Sets Ads.
     *
     * @param AdUpdateItem[] $value
     *
     * @return $this
     */
    public function setAds(array $value)
    {
        $this->Ads = $value;

        return $this;
    }
}
