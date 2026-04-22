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
 * @implements IteratorAggregate<int, KeywordUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateKeywordsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<KeywordUpdateItem> */
    protected $Keywords;

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
     * Get Keywords
     *
     * @return non-empty-list<KeywordUpdateItem>
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Set Keywords
     *
     * @param non-empty-list<KeywordUpdateItem> $value
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

    /** @return ArrayIterator<int, KeywordUpdateItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Keywords);
    }
}
