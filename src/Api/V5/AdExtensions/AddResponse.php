<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdExtensions;

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
class AddResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AddResults;

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
     * Get AddResults
     *
     * @return list<ActionResult>
     */
    public function getAddResults(): array
    {
        return $this->AddResults ?? [];
    }

    /**
     * Set AddResults
     *
     * @param list<ActionResult> $value
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
        return isset($this->AddResults) ? count($this->AddResults) : 0;
    }

    /** @return ArrayIterator<int<0, max>, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AddResults ?? []);
    }
}
