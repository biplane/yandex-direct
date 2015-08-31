<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class PayCampaignsInfo
{
    /**
     * @var PayCampElement[]
     */
    protected $Payments;
    /**
     * @var string
     */
    protected $ContractID;
    /**
     * @var string
     */
    protected $PayMethod;

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
     * @return PayCampaignsInfo
     */
    public function setPayments(array $Payments)
    {
        $this->Payments = $Payments;

        return $this;
    }

    /**
     * Gets the ContractID.
     *
     * @return string
     */
    public function getContractID()
    {
        return $this->ContractID;
    }

    /**
     * Sets the ContractID.
     *
     * @param string $ContractID
     *
     * @return PayCampaignsInfo
     */
    public function setContractID($ContractID)
    {
        $this->ContractID = $ContractID;

        return $this;
    }

    /**
     * Gets the PayMethod.
     *
     * @return string
     */
    public function getPayMethod()
    {
        return $this->PayMethod;
    }

    /**
     * Sets the PayMethod.
     *
     * @param string $PayMethod
     *
     * @return PayCampaignsInfo
     */
    public function setPayMethod($PayMethod)
    {
        $this->PayMethod = $PayMethod;

        return $this;
    }
}