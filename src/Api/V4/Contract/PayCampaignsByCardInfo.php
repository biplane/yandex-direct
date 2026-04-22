<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PayCampaignsByCardInfo
{
    /** @var string */
    protected $PayMethodID;

    /** @var string */
    protected $CustomTransactionID;

//    Can be omitted.
//    protected $Payments;

    /** @var string|null */
    protected $Version = null;

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
     * Get PayMethodID
     */
    public function getPayMethodID(): string
    {
        return $this->PayMethodID;
    }

    /**
     * Set PayMethodID
     *
     * @return $this
     */
    public function setPayMethodID(string $value)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    /**
     * Get CustomTransactionID
     */
    public function getCustomTransactionID(): string
    {
        return $this->CustomTransactionID;
    }

    /**
     * Set CustomTransactionID
     *
     * @return $this
     */
    public function setCustomTransactionID(string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
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
     * Get Version
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }

    /**
     * Set Version
     *
     * @return $this
     */
    public function setVersion(?string $value)
    {
        $this->Version = $value;

        return $this;
    }
}
