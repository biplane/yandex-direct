<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return PayCampElement[]
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * @param PayCampElement[] $Payments
     * @return PayCampaignsInfo
     */
    public function setPayments(array $Payments)
    {
        $this->Payments = $Payments;

        return $this;
    }

    /**
     * @return string
     */
    public function getContractID()
    {
        return $this->ContractID;
    }

    /**
     * @param string $ContractID
     * @return PayCampaignsInfo
     */
    public function setContractID($ContractID)
    {
        $this->ContractID = $ContractID;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayMethod()
    {
        return $this->PayMethod;
    }

    /**
     * @param string $PayMethod
     * @return PayCampaignsInfo
     */
    public function setPayMethod($PayMethod)
    {
        $this->PayMethod = $PayMethod;

        return $this;
    }
}