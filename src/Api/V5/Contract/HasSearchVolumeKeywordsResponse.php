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
 * @implements IteratorAggregate<int, HasSearchVolumeItem>
 */
#[AllowDynamicProperties]
class HasSearchVolumeKeywordsResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<HasSearchVolumeItem> */
    protected $HasSearchVolumeResults;

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
     * Get HasSearchVolumeResults
     *
     * @return non-empty-list<HasSearchVolumeItem>
     */
    public function getHasSearchVolumeResults(): array
    {
        return $this->HasSearchVolumeResults;
    }

    /**
     * Set HasSearchVolumeResults
     *
     * @param non-empty-list<HasSearchVolumeItem> $value
     *
     * @return $this
     */
    public function setHasSearchVolumeResults(array $value)
    {
        $this->HasSearchVolumeResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->HasSearchVolumeResults);
    }

    /** @return ArrayIterator<int, HasSearchVolumeItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->HasSearchVolumeResults);
    }
}
