<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PayCampaignsInfo
{

    protected $Payments = [];

    protected $ContractID = null;

    protected $PayMethod = null;

    /**
     * Creates a new instance of PayCampaignsInfo.
     *
     * @return self
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
     * @param PayCampElement[] $value
     * @return self
     */
    public function setPayments(array $value)
    {
        $this->Payments = $value;

        return $this;
    }

    /**
     * Gets ContractID.
     *
     * @return string|null
     */
    public function getContractID()
    {
        return $this->ContractID;
    }

    /**
     * Sets ContractID.
     *
     * @param string|null $value
     * @return self
     */
    public function setContractID($value = null)
    {
        $this->ContractID = $value;

        return $this;
    }

    /**
     * Gets PayMethod.
     *
     * @return string
     */
    public function getPayMethod()
    {
        return $this->PayMethod;
    }

    /**
     * Sets PayMethod.
     *
     * @param string $value
     * @return self
     */
    public function setPayMethod($value)
    {
        $this->PayMethod = $value;

        return $this;
    }


}

