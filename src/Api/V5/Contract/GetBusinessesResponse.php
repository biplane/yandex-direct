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
 * @implements IteratorAggregate<int, BusinessGetItem>
 */
#[AllowDynamicProperties]
class GetBusinessesResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Businesses;

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

    /**
     * @return ArrayIterator<int, BusinessGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Businesses ?? []);
    }
}
