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
 * @implements IteratorAggregate<int, ActionResult>
 */
#[AllowDynamicProperties]
class ArchiveStrategiesResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $ArchiveResults;

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
     * Get ArchiveResults
     *
     * @return list<ActionResult>
     */
    public function getArchiveResults(): array
    {
        return $this->ArchiveResults ?? [];
    }

    /**
     * Set ArchiveResults
     *
     * @param list<ActionResult> $value
     *
     * @return $this
     */
    public function setArchiveResults(array $value)
    {
        $this->ArchiveResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->ArchiveResults) ? count($this->ArchiveResults) : 0;
    }

    /**
     * @return ArrayIterator<int, ActionResult>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->ArchiveResults ?? []);
    }
}
