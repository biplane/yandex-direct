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
 * @implements IteratorAggregate<int, TurboPageGetItem>
 */
#[AllowDynamicProperties]
class GetTurboPagesResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $TurboPages;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get TurboPages
     *
     * @return list<TurboPageGetItem>
     */
    public function getTurboPages(): array
    {
        return $this->TurboPages ?? [];
    }

    /**
     * Set TurboPages
     *
     * @param list<TurboPageGetItem> $value
     *
     * @return $this
     */
    public function setTurboPages(array $value)
    {
        $this->TurboPages = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->TurboPages) ? count($this->TurboPages) : 0;
    }

    /** @return ArrayIterator<int, TurboPageGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->TurboPages ?? []);
    }
}
