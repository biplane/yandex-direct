<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Ads = null;

    /**
     * Creates a new instance of GetAdsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Ads.
     *
     * @return AdGetItem[]|null
     */
    public function getAds(): ?array
    {
        return $this->Ads ?? null;
    }

    /**
     * Sets Ads.
     *
     * @param AdGetItem[]|null $value
     *
     * @return $this
     */
    public function setAds(?array $value = null)
    {
        $this->Ads = $value;

        return $this;
    }
}
