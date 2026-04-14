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
 * @implements IteratorAggregate<int, StrategyGetItem>
 */
#[AllowDynamicProperties]
class GetStrategiesResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Strategies;

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
     * @return list<StrategyGetItem>
     */
    public function getStrategies(): array
    {
        return $this->Strategies ?? [];
    }

    /**
     * Set Strategies
     *
     * @param list<StrategyGetItem> $value
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
        return isset($this->Strategies) ? count($this->Strategies) : 0;
    }

    /**
     * @return ArrayIterator<int, StrategyGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Strategies ?? []);
    }
}
