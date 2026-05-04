<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdImages;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, AdImageActionResult>
 */
#[AllowDynamicProperties]
class DeleteResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $DeleteResults;

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
     * @return list<AdImageActionResult>
     */
    public function getDeleteResults(): array
    {
        return $this->DeleteResults ?? [];
    }

    /**
     * Set DeleteResults
     *
     * @param list<AdImageActionResult> $value
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
        return isset($this->DeleteResults) ? count($this->DeleteResults) : 0;
    }

    /** @return ArrayIterator<int<0, max>, AdImageActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->DeleteResults ?? []);
    }
}
