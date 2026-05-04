<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\DynamicTextAdTargets;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, WebpageAddItem>
 */
#[AllowDynamicProperties]
class AddRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<WebpageAddItem> */
    protected $Webpages;

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
     * Get Webpages
     *
     * @return non-empty-list<WebpageAddItem>
     */
    public function getWebpages(): array
    {
        return $this->Webpages;
    }

    /**
     * Set Webpages
     *
     * @param non-empty-list<WebpageAddItem> $value
     *
     * @return $this
     */
    public function setWebpages(array $value)
    {
        $this->Webpages = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Webpages);
    }

    /** @return ArrayIterator<int<0, max>, WebpageAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Webpages);
    }
}
