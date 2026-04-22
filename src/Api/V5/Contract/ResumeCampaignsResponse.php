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
class ResumeCampaignsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $ResumeResults;

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
     * @return list<ActionResult>
     */
    public function getResumeResults(): array
    {
        return $this->ResumeResults ?? [];
    }

    /**
     * Set ResumeResults
     *
     * @param list<ActionResult> $value
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
        return isset($this->ResumeResults) ? count($this->ResumeResults) : 0;
    }

    /** @return ArrayIterator<int, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->ResumeResults ?? []);
    }
}
