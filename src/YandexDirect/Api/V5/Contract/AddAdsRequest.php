<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdsRequest
{

    protected $Ads = array(
        
    );

    /**
     * Creates a new instance of AddAdsRequest.
     *
     * @return AddAdsRequest
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
     * @return $this
     */
    public function setAds(array $value)
    {
        $this->Ads = $value;

        return $this;
    }


}

