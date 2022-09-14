<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CreateInvoiceInfo
{
    protected $Payments = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return PayCampElement[]
     */
    public function getPayments(): array
    {
        return $this->Payments;
    }

    /**
     * @param PayCampElement[] $value
     *
     * @return $this
     */
    public function setPayments(array $value)
    {
        $this->Payments = $value;

        return $this;
    }
}
