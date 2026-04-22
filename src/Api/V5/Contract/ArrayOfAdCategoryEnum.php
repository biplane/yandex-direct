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
 * @implements IteratorAggregate<int, 'ABORTION'|'ALCOHOL'|'BABY_FOOD'|'DIETARY_SUPPLEMENTS'|'MEDICINE'|'PROJECT_DECLARATION'|'PSEUDO_WEAPON'|'TOBACCO'>
 */
#[AllowDynamicProperties]
class ArrayOfAdCategoryEnum implements IteratorAggregate, Countable
{
    /** @var non-empty-list<'ABORTION'|'ALCOHOL'|'BABY_FOOD'|'DIETARY_SUPPLEMENTS'|'MEDICINE'|'PROJECT_DECLARATION'|'PSEUDO_WEAPON'|'TOBACCO'> */
    protected $Items;

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
     * Get Items
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdCategoryEnum
     *
     * @return non-empty-list<'ABORTION'|'ALCOHOL'|'BABY_FOOD'|'DIETARY_SUPPLEMENTS'|'MEDICINE'|'PROJECT_DECLARATION'|'PSEUDO_WEAPON'|'TOBACCO'>
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Set Items
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdCategoryEnum
     *
     * @param non-empty-list<'ABORTION'|'ALCOHOL'|'BABY_FOOD'|'DIETARY_SUPPLEMENTS'|'MEDICINE'|'PROJECT_DECLARATION'|'PSEUDO_WEAPON'|'TOBACCO'> $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Items);
    }

    /** @return ArrayIterator<int, 'ABORTION'|'ALCOHOL'|'BABY_FOOD'|'DIETARY_SUPPLEMENTS'|'MEDICINE'|'PROJECT_DECLARATION'|'PSEUDO_WEAPON'|'TOBACCO'> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Items);
    }
}
