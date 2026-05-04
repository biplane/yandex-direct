<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AudienceTargets;

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
class SuspendResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<ActionResult> */
    protected $SuspendResults;

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
     * Get SuspendResults
     *
     * @return non-empty-list<ActionResult>
     */
    public function getSuspendResults(): array
    {
        return $this->SuspendResults;
    }

    /**
     * Set SuspendResults
     *
     * @param non-empty-list<ActionResult> $value
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
        return count($this->SuspendResults);
    }

    /** @return ArrayIterator<int<0, max>, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SuspendResults);
    }
}
