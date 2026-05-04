<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AudienceTargets;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\General\SetBidsActionResult;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, SetBidsActionResult>
 */
#[AllowDynamicProperties]
class SetBidsResponse implements IteratorAggregate, Countable
{
    /** @var non-empty-list<SetBidsActionResult> */
    protected $SetBidsResults;

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
     * Get SetBidsResults
     *
     * @return non-empty-list<SetBidsActionResult>
     */
    public function getSetBidsResults(): array
    {
        return $this->SetBidsResults;
    }

    /**
     * Set SetBidsResults
     *
     * @param non-empty-list<SetBidsActionResult> $value
     *
     * @return $this
     */
    public function setSetBidsResults(array $value)
    {
        $this->SetBidsResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->SetBidsResults);
    }

    /** @return ArrayIterator<int<0, max>, SetBidsActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SetBidsResults);
    }
}
