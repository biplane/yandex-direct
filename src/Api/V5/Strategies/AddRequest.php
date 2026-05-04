<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Strategies;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, StrategyAddItem>
 */
#[AllowDynamicProperties]
class AddRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<StrategyAddItem> */
    protected $Strategies;

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
     * Get Strategies
     *
     * @return non-empty-list<StrategyAddItem>
     */
    public function getStrategies(): array
    {
        return $this->Strategies;
    }

    /**
     * Set Strategies
     *
     * @param non-empty-list<StrategyAddItem> $value
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

    /** @return ArrayIterator<int<0, max>, StrategyAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Strategies);
    }
}
