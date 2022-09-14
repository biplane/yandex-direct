<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PayCampaignsInfo
{
    protected $Payments = [];

    protected $ContractID = null;

    protected $PayMethod = null;

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

    public function getContractID(): ?string
    {
        return $this->ContractID;
    }

    /**
     * @return $this
     */
    public function setContractID(?string $value = null)
    {
        $this->ContractID = $value;

        return $this;
    }

    public function getPayMethod(): string
    {
        return $this->PayMethod;
    }

    /**
     * @return $this
     */
    public function setPayMethod(string $value)
    {
        $this->PayMethod = $value;

        return $this;
    }
}
