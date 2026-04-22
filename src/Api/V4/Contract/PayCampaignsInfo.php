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
//    Can be omitted.
//    protected $Payments;

    /** @var string|null */
    protected $ContractID = null;

    /** @var string */
    protected $PayMethod;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
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

    /**
     * Get ContractID
     */
    public function getContractID(): ?string
    {
        return $this->ContractID;
    }

    /**
     * Set ContractID
     *
     * @return $this
     */
    public function setContractID(?string $value)
    {
        $this->ContractID = $value;

        return $this;
    }

    /**
     * Get PayMethod
     */
    public function getPayMethod(): string
    {
        return $this->PayMethod;
    }

    /**
     * Set PayMethod
     *
     * @return $this
     */
    public function setPayMethod(string $value)
    {
        $this->PayMethod = $value;

        return $this;
    }
}
