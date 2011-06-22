<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class CreateInvoiceInfo
{
    /**
     * @var PayCampElement[]
     */
    protected $Payments;

    /**
     * @return PayCampElement[]
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * @param PayCampElement[] $Payments
     * @return CreateInvoiceInfo
     */
    public function setPayments(array $Payments)
    {
        $this->Payments = $Payments;

        return $this;
    }
}