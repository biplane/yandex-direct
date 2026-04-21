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
    /** @var string|null */
    protected $AgencyName = null;

    /** @var int */
    protected $AccountID;

    /** @var AccountDayBudgetInfo|null */
    protected $AccountDayBudget = null;

    /** @var float|null */
    protected $Amount = null;

    /** @var float|null */
    protected $AmountAvailableForTransfer = null;

    /** @var string|null */
    protected $Currency = null;

    /** @var string|null */
    protected $Login = null;

    /** @var float|null */
    protected $Discount = null;

    /** @var SmsNotificationInfo|null */
    protected $SmsNotification = null;

    /** @var EmailNotificationInfo|null */
    protected $EmailNotification = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AgencyName
     */
    public function getAgencyName(): ?string
    {
        return $this->AgencyName;
    }

    /**
     * Set AgencyName
     *
     * @return $this
     */
    public function setAgencyName(?string $value)
    {
        $this->AgencyName = $value;

        return $this;
    }

    /**
     * Get AccountID
     */
    public function getAccountID(): int
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID
     *
     * @return $this
     */
    public function setAccountID(int $value)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Get AccountDayBudget
     */
    public function getAccountDayBudget(): ?AccountDayBudgetInfo
    {
        return $this->AccountDayBudget;
    }

    /**
     * Set AccountDayBudget
     *
     * @return $this
     */
    public function setAccountDayBudget(?AccountDayBudgetInfo $value)
    {
        $this->AccountDayBudget = $value;

        return $this;
    }

    /**
     * Get Amount
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    /**
     * Set Amount
     *
     * @return $this
     */
    public function setAmount(?float $value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Get AmountAvailableForTransfer
     */
    public function getAmountAvailableForTransfer(): ?float
    {
        return $this->AmountAvailableForTransfer;
    }

    /**
     * Set AmountAvailableForTransfer
     *
     * @return $this
     */
    public function setAmountAvailableForTransfer(?float $value)
    {
        $this->AmountAvailableForTransfer = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(?string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get Discount
     */
    public function getDiscount(): ?float
    {
        return $this->Discount;
    }

    /**
     * Set Discount
     *
     * @return $this
     */
    public function setDiscount(?float $value)
    {
        $this->Discount = $value;

        return $this;
    }

    /**
     * Get SmsNotification
     */
    public function getSmsNotification(): ?SmsNotificationInfo
    {
        return $this->SmsNotification;
    }

    /**
     * Set SmsNotification
     *
     * @return $this
     */
    public function setSmsNotification(?SmsNotificationInfo $value)
    {
        $this->SmsNotification = $value;

        return $this;
    }

    /**
     * Get EmailNotification
     */
    public function getEmailNotification(): ?EmailNotificationInfo
    {
        return $this->EmailNotification;
    }

    /**
     * Set EmailNotification
     *
     * @return $this
     */
    public function setEmailNotification(?EmailNotificationInfo $value)
    {
        $this->EmailNotification = $value;

        return $this;
    }
}
