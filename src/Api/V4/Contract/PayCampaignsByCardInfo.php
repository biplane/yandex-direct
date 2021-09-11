<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PayCampaignsByCardInfo
{
    protected $PayMethodID = null;

    protected $CustomTransactionID = null;

    protected $Payments = [];

    protected $Version = null;

    /**
     * Creates a new instance of PayCampaignsByCardInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets PayMethodID.
     */
    public function getPayMethodID(): string
    {
        return $this->PayMethodID;
    }

    /**
     * Sets PayMethodID.
     *
     * @return $this
     */
    public function setPayMethodID(string $value)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    /**
     * Gets CustomTransactionID.
     */
    public function getCustomTransactionID(): string
    {
        return $this->CustomTransactionID;
    }

    /**
     * Sets CustomTransactionID.
     *
     * @return $this
     */
    public function setCustomTransactionID(string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
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
     * Gets Version.
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }

    /**
     * Sets Version.
     *
     * @return $this
     */
    public function setVersion(?string $value = null)
    {
        $this->Version = $value;

        return $this;
    }
}
