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
 * @implements IteratorAggregate<int, SitelinksSetGetItem>
 */
#[AllowDynamicProperties]
class GetSitelinksResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $SitelinksSets;

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
     * Get SitelinksSets
     *
     * @return list<SitelinksSetGetItem>
     */
    public function getSitelinksSets(): array
    {
        return $this->SitelinksSets ?? [];
    }

    /**
     * Set SitelinksSets
     *
     * @param list<SitelinksSetGetItem> $value
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
        return isset($this->SitelinksSets) ? count($this->SitelinksSets) : 0;
    }

    /** @return ArrayIterator<int, SitelinksSetGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SitelinksSets ?? []);
    }
}
