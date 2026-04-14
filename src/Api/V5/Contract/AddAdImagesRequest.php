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
 * @implements IteratorAggregate<int, AdImageAddItem>
 */
#[AllowDynamicProperties]
class AddAdImagesRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AdImageAddItem> */
    protected $AdImages;

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
     * Get AdImages
     *
     * @return non-empty-list<AdImageAddItem>
     */
    public function getAdImages(): array
    {
        return $this->AdImages;
    }

    /**
     * Set AdImages
     *
     * @param non-empty-list<AdImageAddItem> $value
     *
     * @return $this
     */
    public function setAdImages(array $value)
    {
        $this->AdImages = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->AdImages);
    }

    /**
     * @return ArrayIterator<int, AdImageAddItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdImages);
    }
}
