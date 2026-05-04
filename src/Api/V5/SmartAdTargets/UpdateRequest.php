<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\SmartAdTargets;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, SmartAdTargetUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<SmartAdTargetUpdateItem> */
    protected $SmartAdTargets;

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
     * Get SmartAdTargets
     *
     * @return non-empty-list<SmartAdTargetUpdateItem>
     */
    public function getSmartAdTargets(): array
    {
        return $this->SmartAdTargets;
    }

    /**
     * Set SmartAdTargets
     *
     * @param non-empty-list<SmartAdTargetUpdateItem> $value
     *
     * @return $this
     */
    public function setSmartAdTargets(array $value)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->SmartAdTargets);
    }

    /** @return ArrayIterator<int<0, max>, SmartAdTargetUpdateItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SmartAdTargets);
    }
}
