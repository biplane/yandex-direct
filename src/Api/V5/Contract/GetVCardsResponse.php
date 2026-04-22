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
 * @implements IteratorAggregate<int, VCardGetItem>
 */
#[AllowDynamicProperties]
class GetVCardsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $VCards;

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
     * Get VCards
     *
     * @return list<VCardGetItem>
     */
    public function getVCards(): array
    {
        return $this->VCards ?? [];
    }

    /**
     * Set VCards
     *
     * @param list<VCardGetItem> $value
     *
     * @return $this
     */
    public function setVCards(array $value)
    {
        $this->VCards = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->VCards) ? count($this->VCards) : 0;
    }

    /** @return ArrayIterator<int, VCardGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->VCards ?? []);
    }
}
