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
 * @implements IteratorAggregate<int, string>
 */
#[AllowDynamicProperties]
class AdImageHashesCriteria implements IteratorAggregate, Countable
{
    /** @var non-empty-list<string> */
    protected $AdImageHashes;

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
     * Get AdImageHashes
     *
     * @return non-empty-list<string>
     */
    public function getAdImageHashes(): array
    {
        return $this->AdImageHashes;
    }

    /**
     * Set AdImageHashes
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->AdImageHashes);
    }

    /**
     * @return ArrayIterator<int, string>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdImageHashes);
    }
}
