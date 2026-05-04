<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdGroups;

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
class DeleteResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<ActionResult> */
    protected $DeleteResults;

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
     * Get DeleteResults
     *
     * @return non-empty-list<ActionResult>
     */
    public function getDeleteResults(): array
    {
        return $this->DeleteResults;
    }

    /**
     * Set DeleteResults
     *
     * @param non-empty-list<ActionResult> $value
     *
     * @return $this
     */
    public function setDeleteResults(array $value)
    {
        $this->DeleteResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->DeleteResults);
    }

    /** @return ArrayIterator<int<0, max>, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->DeleteResults);
    }
}
