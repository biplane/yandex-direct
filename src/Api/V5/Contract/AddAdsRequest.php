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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdAddItem[]
     */
    public function getAds(): array
    {
        return $this->Ads;
    }

    /**
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
