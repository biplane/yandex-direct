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
 * @implements IteratorAggregate<int, SetBidsActionResult>
 */
#[AllowDynamicProperties]
class SetBidsSmartAdTargetsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $SetBidsResults;

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
     * Get SetBidsResults
     *
     * @return list<SetBidsActionResult>
     */
    public function getSetBidsResults(): array
    {
        return $this->SetBidsResults ?? [];
    }

    /**
     * Set SetBidsResults
     *
     * @param list<SetBidsActionResult> $value
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
        return isset($this->SetBidsResults) ? count($this->SetBidsResults) : 0;
    }

    /**
     * @return ArrayIterator<int, SetBidsActionResult>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SetBidsResults ?? []);
    }
}
