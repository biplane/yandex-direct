<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetGeoRegionsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $GeoRegions = null;

    /**
     * @return GeoRegionGetItem[]|null
     */
    public function getGeoRegions(): ?array
    {
        return $this->GeoRegions ?? null;
    }

    /**
     * @param GeoRegionGetItem[]|null $value
     *
     * @return $this
     */
    public function setGeoRegions(?array $value = null)
    {
        $this->GeoRegions = $value;

        return $this;
    }
}
