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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdUpdateItem[]
     */
    public function getAds(): array
    {
        return $this->Ads;
    }

    /**
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
