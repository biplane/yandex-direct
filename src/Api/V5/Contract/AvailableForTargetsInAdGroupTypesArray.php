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
 * @implements IteratorAggregate<int, 'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'>
 */
#[AllowDynamicProperties]
class AvailableForTargetsInAdGroupTypesArray implements IteratorAggregate, Countable
{
    /** @var non-empty-list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'> */
    protected $Items;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Items
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum
     *
     * @return non-empty-list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'>
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Set Items
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum
     *
     * @param non-empty-list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'> $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Items);
    }

    /**
     * @return ArrayIterator<int, 'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Items);
    }
}
