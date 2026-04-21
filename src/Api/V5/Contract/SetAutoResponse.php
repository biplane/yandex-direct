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
 * @implements IteratorAggregate<int, KeywordBidActionResult>
 */
#[AllowDynamicProperties]
class SetAutoResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $SetAutoResults;

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
     * Get SetAutoResults
     *
     * @return list<KeywordBidActionResult>
     */
    public function getSetAutoResults(): array
    {
        return $this->SetAutoResults ?? [];
    }

    /**
     * Set SetAutoResults
     *
     * @param list<KeywordBidActionResult> $value
     *
     * @return $this
     */
    public function setSetAutoResults(array $value)
    {
        $this->SetAutoResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->SetAutoResults) ? count($this->SetAutoResults) : 0;
    }

    /**
     * @return ArrayIterator<int, KeywordBidActionResult>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SetAutoResults ?? []);
    }
}
