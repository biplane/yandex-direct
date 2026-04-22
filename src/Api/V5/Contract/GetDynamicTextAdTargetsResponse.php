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
 * @implements IteratorAggregate<int, WebpageGetItem>
 */
#[AllowDynamicProperties]
class GetDynamicTextAdTargetsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Webpages;

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
     * Get Webpages
     *
     * @return list<WebpageGetItem>
     */
    public function getWebpages(): array
    {
        return $this->Webpages ?? [];
    }

    /**
     * Set Webpages
     *
     * @param list<WebpageGetItem> $value
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
        return isset($this->Webpages) ? count($this->Webpages) : 0;
    }

    /** @return ArrayIterator<int, WebpageGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Webpages ?? []);
    }
}
