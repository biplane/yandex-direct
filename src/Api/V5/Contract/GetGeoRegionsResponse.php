<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int, GeoRegionGetItem>
 */
#[AllowDynamicProperties]
class GetGeoRegionsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $GeoRegions;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get GeoRegions
     *
     * @return list<GeoRegionGetItem>
     */
    public function getGeoRegions(): array
    {
        return $this->GeoRegions ?? [];
    }

    /**
     * Set GeoRegions
     *
     * @param list<GeoRegionGetItem> $value
     *
     * @return $this
     */
    public function setGeoRegions(array $value)
    {
        $this->GeoRegions = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->GeoRegions) ? count($this->GeoRegions) : 0;
    }

    /** @return ArrayIterator<int, GeoRegionGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->GeoRegions ?? []);
    }
}
