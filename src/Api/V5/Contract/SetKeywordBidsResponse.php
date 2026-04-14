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
class SetKeywordBidsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $SetResults;

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
     * Get SetResults
     *
     * @return list<KeywordBidActionResult>
     */
    public function getSetResults(): array
    {
        return $this->SetResults ?? [];
    }

    /**
     * Set SetResults
     *
     * @param list<KeywordBidActionResult> $value
     *
     * @return $this
     */
    public function setSetResults(array $value)
    {
        $this->SetResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->SetResults) ? count($this->SetResults) : 0;
    }

    /**
     * @return ArrayIterator<int, KeywordBidActionResult>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SetResults ?? []);
    }
}
