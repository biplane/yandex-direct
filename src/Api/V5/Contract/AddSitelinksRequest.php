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
 * @implements IteratorAggregate<int, SitelinksSetAddItem>
 */
#[AllowDynamicProperties]
class AddSitelinksRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<SitelinksSetAddItem> */
    protected $SitelinksSets;

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
     * Get SitelinksSets
     *
     * @return non-empty-list<SitelinksSetAddItem>
     */
    public function getSitelinksSets(): array
    {
        return $this->SitelinksSets;
    }

    /**
     * Set SitelinksSets
     *
     * @param non-empty-list<SitelinksSetAddItem> $value
     *
     * @return $this
     */
    public function setSitelinksSets(array $value)
    {
        $this->SitelinksSets = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->SitelinksSets);
    }

    /** @return ArrayIterator<int, SitelinksSetAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SitelinksSets);
    }
}
