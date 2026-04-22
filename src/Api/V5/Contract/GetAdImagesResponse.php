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
 * @implements IteratorAggregate<int, AdImageGetItem>
 */
#[AllowDynamicProperties]
class GetAdImagesResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AdImages;

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
     * Get AdImages
     *
     * @return list<AdImageGetItem>
     */
    public function getAdImages(): array
    {
        return $this->AdImages ?? [];
    }

    /**
     * Set AdImages
     *
     * @param list<AdImageGetItem> $value
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
        return isset($this->AdImages) ? count($this->AdImages) : 0;
    }

    /** @return ArrayIterator<int, AdImageGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdImages ?? []);
    }
}
