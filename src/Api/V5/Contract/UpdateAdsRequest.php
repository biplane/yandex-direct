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
 * @implements IteratorAggregate<int, AdUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateAdsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AdUpdateItem> */
    protected $Ads;

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
     * Get Ads
     *
     * @return non-empty-list<AdUpdateItem>
     */
    public function getAds(): array
    {
        return $this->Ads;
    }

    /**
     * Set Ads
     *
     * @param non-empty-list<AdUpdateItem> $value
     *
     * @return $this
     */
    public function setAds(array $value)
    {
        $this->Ads = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Ads);
    }

    /**
     * @return ArrayIterator<int, AdUpdateItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Ads);
    }
}
