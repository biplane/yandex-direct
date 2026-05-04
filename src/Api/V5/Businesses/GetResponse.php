<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Businesses;

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
 * @implements IteratorAggregate<int<0, max>, BusinessGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Businesses;

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
     * Get Businesses
     *
     * @return list<BusinessGetItem>
     */
    public function getBusinesses(): array
    {
        return $this->Businesses ?? [];
    }

    /**
     * Set Businesses
     *
     * @param list<BusinessGetItem> $value
     *
     * @return $this
     */
    public function setBusinesses(array $value)
    {
        $this->Businesses = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->Businesses) ? count($this->Businesses) : 0;
    }

    /** @return ArrayIterator<int<0, max>, BusinessGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Businesses ?? []);
    }
}
