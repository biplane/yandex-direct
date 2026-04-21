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
 * @implements IteratorAggregate<int, KeywordAddItem>
 */
#[AllowDynamicProperties]
class AddKeywordsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<KeywordAddItem> */
    protected $Keywords;

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
     * Get Keywords
     *
     * @return non-empty-list<KeywordAddItem>
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Set Keywords
     *
     * @param non-empty-list<KeywordAddItem> $value
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
        return count($this->Keywords);
    }

    /**
     * @return ArrayIterator<int, KeywordAddItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Keywords);
    }
}
