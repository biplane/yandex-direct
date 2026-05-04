<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\VCards;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, VCardAddItem>
 */
#[AllowDynamicProperties]
class AddRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<VCardAddItem> */
    protected $VCards;

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
     * Get VCards
     *
     * @return non-empty-list<VCardAddItem>
     */
    public function getVCards(): array
    {
        return $this->VCards;
    }

    /**
     * Set VCards
     *
     * @param non-empty-list<VCardAddItem> $value
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
        return count($this->VCards);
    }

    /** @return ArrayIterator<int<0, max>, VCardAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->VCards);
    }
}
