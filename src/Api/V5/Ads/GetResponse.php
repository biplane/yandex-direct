<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Ads;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\General\GetResponseGeneral;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, AdGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Ads;

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

    /** @return ArrayIterator<int<0, max>, AdGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Ads ?? []);
    }
}
