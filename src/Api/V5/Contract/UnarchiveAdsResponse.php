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
class UnarchiveAdsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $UnarchiveResults;

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
     * Get UnarchiveResults
     *
     * @return list<ActionResult>
     */
    public function getUnarchiveResults(): array
    {
        return $this->UnarchiveResults ?? [];
    }

    /**
     * Set UnarchiveResults
     *
     * @param list<ActionResult> $value
     *
     * @return $this
     */
    public function setUnarchiveResults(array $value)
    {
        $this->UnarchiveResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->UnarchiveResults) ? count($this->UnarchiveResults) : 0;
    }

    /** @return ArrayIterator<int, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->UnarchiveResults ?? []);
    }
}
