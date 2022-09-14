<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetAdsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Ads = null;

    /**
     * @return AdGetItem[]|null
     */
    public function getAds(): ?array
    {
        return $this->Ads ?? null;
    }

    /**
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
