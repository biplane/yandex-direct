<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdsRequest
{

    protected $Ads = [];

    /**
     * Creates a new instance of UpdateAdsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ads.
     *
     * @return AdUpdateItem[]
     */
    public function getAds()
    {
        return $this->Ads;
    }

    /**
     * Sets Ads.
     *
     * @param AdUpdateItem[] $value
     * @return self
     */
    public function setAds(array $value)
    {
        $this->Ads = $value;

        return $this;
    }


}

