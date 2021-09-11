<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Payments.
     *
     * @return PayCampElement[]
     */
    public function getPayments(): array
    {
        return $this->Payments;
    }

    /**
     * Sets Payments.
     *
     * @param PayCampElement[] $value
     *
     * @return $this
     */
    public function setPayments(array $value)
    {
        $this->Payments = $value;

        return $this;
    }

    /**
     * Gets ContractID.
     */
    public function getContractID(): ?string
    {
        return $this->ContractID;
    }

    /**
     * Sets ContractID.
     *
     * @return $this
     */
    public function setContractID(?string $value = null)
    {
        $this->ContractID = $value;

        return $this;
    }

    /**
     * Gets PayMethod.
     */
    public function getPayMethod(): string
    {
        return $this->PayMethod;
    }

    /**
     * Sets PayMethod.
     *
     * @return $this
     */
    public function setPayMethod(string $value)
    {
        $this->PayMethod = $value;

        return $this;
    }
}
