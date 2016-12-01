<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdsRequest
{

    protected $Ads = [];

    /**
     * Creates a new instance of AddAdsRequest.
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
     * @return AdAddItem[]
     */
    public function getAds()
    {
        return $this->Ads;
    }

    /**
     * Sets Ads.
     *
     * @param AdAddItem[] $value
     * @return self
     */
    public function setAds(array $value)
    {
        $this->Ads = $value;

        return $this;
    }


}

