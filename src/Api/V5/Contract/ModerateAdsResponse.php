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
class ModerateAdsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $ModerateResults;

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
     * Get ModerateResults
     *
     * @return list<ActionResult>
     */
    public function getModerateResults(): array
    {
        return $this->ModerateResults ?? [];
    }

    /**
     * Set ModerateResults
     *
     * @param list<ActionResult> $value
     *
     * @return $this
     */
    public function setModerateResults(array $value)
    {
        $this->ModerateResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->ModerateResults) ? count($this->ModerateResults) : 0;
    }

    /** @return ArrayIterator<int, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->ModerateResults ?? []);
    }
}
