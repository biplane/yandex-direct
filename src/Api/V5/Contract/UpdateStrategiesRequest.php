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
 * @implements IteratorAggregate<int, StrategyUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateStrategiesRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<StrategyUpdateItem> */
    protected $Strategies;

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
     * Get Strategies
     *
     * @return non-empty-list<StrategyUpdateItem>
     */
    public function getStrategies(): array
    {
        return $this->Strategies;
    }

    /**
     * Set Strategies
     *
     * @param non-empty-list<StrategyUpdateItem> $value
     *
     * @return $this
     */
    public function setStrategies(array $value)
    {
        $this->Strategies = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Strategies);
    }

    /**
     * @return ArrayIterator<int, StrategyUpdateItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Strategies);
    }
}
