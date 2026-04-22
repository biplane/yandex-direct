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
 * @implements IteratorAggregate<int, AdAddItem>
 */
#[AllowDynamicProperties]
class AddAdsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AdAddItem> */
    protected $Ads;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Ads
     *
     * @return non-empty-list<AdAddItem>
     */
    public function getAds(): array
    {
        return $this->Ads;
    }

    /**
     * Set Ads
     *
     * @param non-empty-list<AdAddItem> $value
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

    /** @return ArrayIterator<int, AdAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Ads);
    }
}
