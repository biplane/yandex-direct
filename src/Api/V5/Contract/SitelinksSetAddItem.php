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
 * @implements IteratorAggregate<int, SitelinkAddItem>
 */
#[AllowDynamicProperties]
class SitelinksSetAddItem implements IteratorAggregate, Countable
{
    /** @var non-empty-list<SitelinkAddItem> */
    protected $Sitelinks;

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
     * Get Sitelinks
     *
     * @return non-empty-list<SitelinkAddItem>
     */
    public function getSitelinks(): array
    {
        return $this->Sitelinks;
    }

    /**
     * Set Sitelinks
     *
     * @param non-empty-list<SitelinkAddItem> $value
     *
     * @return $this
     */
    public function setSitelinks(array $value)
    {
        $this->Sitelinks = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Sitelinks);
    }

    /** @return ArrayIterator<int, SitelinkAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Sitelinks);
    }
}
