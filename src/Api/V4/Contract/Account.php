<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Account
{
    protected $AgencyName = null;

    protected $AccountID = null;

    protected $AccountDayBudget = null;

    protected $Amount = null;

    protected $AmountAvailableForTransfer = null;

    protected $Currency = null;

    protected $Login = null;

    protected $Discount = null;

    protected $SmsNotification = null;

    protected $EmailNotification = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAgencyName(): ?string
    {
        return $this->AgencyName;
    }

    /**
     * @return $this
     */
    public function setAgencyName(?string $value = null)
    {
        $this->AgencyName = $value;

        return $this;
    }

    public function getAccountID(): int
    {
        return $this->AccountID;
    }

    /**
     * @return $this
     */
    public function setAccountID(int $value)
    {
        $this->AccountID = $value;

        return $this;
    }

    public function getAccountDayBudget(): ?AccountDayBudgetInfo
    {
        return $this->AccountDayBudget;
    }

    /**
     * @return $this
     */
    public function setAccountDayBudget(?AccountDayBudgetInfo $value = null)
    {
        $this->AccountDayBudget = $value;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    /**
     * @return $this
     */
    public function setAmount(?float $value = null)
    {
        $this->Amount = $value;

        return $this;
    }

    public function getAmountAvailableForTransfer(): ?float
    {
        return $this->AmountAvailableForTransfer;
    }

    /**
     * @return $this
     */
    public function setAmountAvailableForTransfer(?float $value = null)
    {
        $this->AmountAvailableForTransfer = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getDiscount(): ?float
    {
        return $this->Discount;
    }

    /**
     * @return $this
     */
    public function setDiscount(?float $value = null)
    {
        $this->Discount = $value;

        return $this;
    }

    public function getSmsNotification(): ?SmsNotificationInfo
    {
        return $this->SmsNotification;
    }

    /**
     * @return $this
     */
    public function setSmsNotification(?SmsNotificationInfo $value = null)
    {
        $this->SmsNotification = $value;

        return $this;
    }

    public function getEmailNotification(): ?EmailNotificationInfo
    {
        return $this->EmailNotification;
    }

    /**
     * @return $this
     */
    public function setEmailNotification(?EmailNotificationInfo $value = null)
    {
        $this->EmailNotification = $value;

        return $this;
    }
}
