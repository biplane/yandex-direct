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
class SuspendAdsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $SuspendResults;

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
     * Get SuspendResults
     *
     * @return list<ActionResult>
     */
    public function getSuspendResults(): array
    {
        return $this->SuspendResults ?? [];
    }

    /**
     * Set SuspendResults
     *
     * @param list<ActionResult> $value
     *
     * @return $this
     */
    public function setSuspendResults(array $value)
    {
        $this->SuspendResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->SuspendResults) ? count($this->SuspendResults) : 0;
    }

    /**
     * @return ArrayIterator<int, ActionResult>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SuspendResults ?? []);
    }
}
