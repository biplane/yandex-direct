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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPayMethodID(): string
    {
        return $this->PayMethodID;
    }

    /**
     * @return $this
     */
    public function setPayMethodID(string $value)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    public function getCustomTransactionID(): string
    {
        return $this->CustomTransactionID;
    }

    /**
     * @return $this
     */
    public function setCustomTransactionID(string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
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

    public function getVersion(): ?string
    {
        return $this->Version;
    }

    /**
     * @return $this
     */
    public function setVersion(?string $value = null)
    {
        $this->Version = $value;

        return $this;
    }
}
