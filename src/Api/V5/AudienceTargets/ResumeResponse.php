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
class ResumeResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<ActionResult> */
    protected $ResumeResults;

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
     * Get ResumeResults
     *
     * @return non-empty-list<ActionResult>
     */
    public function getResumeResults(): array
    {
        return $this->ResumeResults;
    }

    /**
     * Set ResumeResults
     *
     * @param non-empty-list<ActionResult> $value
     *
     * @return $this
     */
    public function setResumeResults(array $value)
    {
        $this->ResumeResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->ResumeResults);
    }

    /** @return ArrayIterator<int<0, max>, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->ResumeResults);
    }
}
