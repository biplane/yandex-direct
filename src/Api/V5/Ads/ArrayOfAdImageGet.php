<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Ads;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, AdImageGetItem>
 */
#[AllowDynamicProperties]
class ArrayOfAdImageGet implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Items;

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
     * Get Items
     *
     * @return list<AdImageGetItem>
     */
    public function getItems(): array
    {
        return $this->Items ?? [];
    }

    /**
     * Set Items
     *
     * @param list<AdImageGetItem> $value
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
        return isset($this->Items) ? count($this->Items) : 0;
    }

    /** @return ArrayIterator<int<0, max>, AdImageGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Items ?? []);
    }
}
