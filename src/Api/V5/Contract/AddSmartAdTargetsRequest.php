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
 * @implements IteratorAggregate<int, SmartAdTargetAddItem>
 */
#[AllowDynamicProperties]
class AddSmartAdTargetsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<SmartAdTargetAddItem> */
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
     * @return non-empty-list<SmartAdTargetAddItem>
     */
    public function getSmartAdTargets(): array
    {
        return $this->SmartAdTargets;
    }

    /**
     * Set SmartAdTargets
     *
     * @param non-empty-list<SmartAdTargetAddItem> $value
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

    /** @return ArrayIterator<int, SmartAdTargetAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SmartAdTargets);
    }
}
