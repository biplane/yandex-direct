<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdExtensions;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\General\GetResponseGeneral;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, AdExtensionGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AdExtensions;

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
     * Get AdExtensions
     *
     * @return list<AdExtensionGetItem>
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions ?? [];
    }

    /**
     * Set AdExtensions
     *
     * @param list<AdExtensionGetItem> $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->AdExtensions) ? count($this->AdExtensions) : 0;
    }

    /** @return ArrayIterator<int<0, max>, AdExtensionGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdExtensions ?? []);
    }
}
