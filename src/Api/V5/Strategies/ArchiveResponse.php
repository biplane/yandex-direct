<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Strategies;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\General\ActionResult;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, ActionResult>
 */
#[AllowDynamicProperties]
class ArchiveResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $ArchiveResults;

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

    /** @return ArrayIterator<int<0, max>, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->ArchiveResults ?? []);
    }
}
