<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreateInvoiceInfo
{

    protected $Payments = array(
        
    );

    /**
     * Creates a new instance of CreateInvoiceInfo.
     *
     * @return CreateInvoiceInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Payments.
     *
     * @return PayCampElement[]
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Sets Payments.
     *
     * @param array $value
     * @return $this
     */
    public function setPayments(array $value)
    {
        $this->Payments = $value;

        return $this;
    }


}

