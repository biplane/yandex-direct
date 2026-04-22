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
 * @implements IteratorAggregate<int, KeywordGetItem>
 */
#[AllowDynamicProperties]
class GetKeywordsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Keywords;

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
     * Get Keywords
     *
     * @return list<KeywordGetItem>
     */
    public function getKeywords(): array
    {
        return $this->Keywords ?? [];
    }

    /**
     * Set Keywords
     *
     * @param list<KeywordGetItem> $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->Keywords) ? count($this->Keywords) : 0;
    }

    /** @return ArrayIterator<int, KeywordGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Keywords ?? []);
    }
}
