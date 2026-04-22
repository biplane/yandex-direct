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
class UpdateCampaignsResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $UpdateResults;

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
     * Get UpdateResults
     *
     * @return list<ActionResult>
     */
    public function getUpdateResults(): array
    {
        return $this->UpdateResults ?? [];
    }

    /**
     * Set UpdateResults
     *
     * @param list<ActionResult> $value
     *
     * @return $this
     */
    public function setUpdateResults(array $value)
    {
        $this->UpdateResults = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->UpdateResults) ? count($this->UpdateResults) : 0;
    }

    /** @return ArrayIterator<int, ActionResult> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->UpdateResults ?? []);
    }
}
