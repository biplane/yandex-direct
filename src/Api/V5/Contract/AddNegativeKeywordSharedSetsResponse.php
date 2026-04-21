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
class AddNegativeKeywordSharedSetsResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<ActionResult> */
    protected $AddResults;

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
     * Get AddResults
     *
     * @return non-empty-list<ActionResult>
     */
    public function getAddResults(): array
    {
        return $this->AddResults;
    }

    /**
     * Set AddResults
     *
     * @param non-empty-list<ActionResult> $value
     *
     * @return $this
     */
    public function setAddResults(array $value)
    {
        $this->AddResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->AddResults);
    }

    /**
     * @return ArrayIterator<int, ActionResult>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AddResults);
    }
}
