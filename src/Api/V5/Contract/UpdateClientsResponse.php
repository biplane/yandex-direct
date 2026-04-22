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
 * @implements IteratorAggregate<int, ClientsActionResult>
 */
#[AllowDynamicProperties]
class UpdateClientsResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<ClientsActionResult> */
    protected $UpdateResults;

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
     * Get UpdateResults
     *
     * @return non-empty-list<ClientsActionResult>
     */
    public function getUpdateResults(): array
    {
        return $this->UpdateResults;
    }

    /**
     * Set UpdateResults
     *
     * @param non-empty-list<ClientsActionResult> $value
     *
     * @return $this
     */
    public function setUpdateResults(array $value)
    {
        $this->UpdateResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->UpdateResults);
    }

    /** @return ArrayIterator<int, ClientsActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->UpdateResults);
    }
}
