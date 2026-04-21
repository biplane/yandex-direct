<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int, PayCampElement>
 */
#[AllowDynamicProperties]
class CreateInvoiceInfo implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Payments;

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
     * Get Payments
     *
     * @return list<PayCampElement>
     */
    public function getPayments(): array
    {
        return $this->Payments ?? [];
    }

    /**
     * Set Payments
     *
     * @param list<PayCampElement> $value
     *
     * @return $this
     */
    public function setPayments(array $value)
    {
        $this->Payments = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->Payments) ? count($this->Payments) : 0;
    }

    /**
     * @return ArrayIterator<int, PayCampElement>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Payments ?? []);
    }
}
