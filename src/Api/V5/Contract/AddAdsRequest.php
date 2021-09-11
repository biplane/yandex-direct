<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdsRequest
{
    protected $Ads = [];

    /**
     * Creates a new instance of AddAdsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Ads.
     *
     * @return AdAddItem[]
     */
    public function getAds(): array
    {
        return $this->Ads;
    }

    /**
     * Sets Ads.
     *
     * @param AdAddItem[] $value
     *
     * @return $this
     */
    public function setAds(array $value)
    {
        $this->Ads = $value;

        return $this;
    }
}
