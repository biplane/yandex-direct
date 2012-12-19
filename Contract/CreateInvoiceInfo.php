<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CreateInvoiceInfo
{
    /**
     * @var PayCampElement[]
     */
    protected $Payments;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Payments.
     *
     * @return PayCampElement[]
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Sets the Payments.
     *
     * @param PayCampElement[] $Payments
     *
     * @return CreateInvoiceInfo
     */
    public function setPayments(array $Payments)
    {
        $this->Payments = $Payments;

        return $this;
    }
}