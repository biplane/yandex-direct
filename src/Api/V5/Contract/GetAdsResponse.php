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
 * @implements IteratorAggregate<int, AdGetItem>
 */
#[AllowDynamicProperties]
class GetAdsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Ads;

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
     * @return list<AdGetItem>
     */
    public function getAds(): array
    {
        return $this->Ads ?? [];
    }

    /**
     * Set Ads
     *
     * @param list<AdGetItem> $value
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
        return isset($this->Ads) ? count($this->Ads) : 0;
    }

    /**
     * @return ArrayIterator<int, AdGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Ads ?? []);
    }
}
