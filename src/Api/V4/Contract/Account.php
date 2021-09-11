<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
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
     * Creates a new instance of Account.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AgencyName.
     */
    public function getAgencyName(): ?string
    {
        return $this->AgencyName;
    }

    /**
     * Sets AgencyName.
     *
     * @return $this
     */
    public function setAgencyName(?string $value = null)
    {
        $this->AgencyName = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     */
    public function getAccountID(): int
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @return $this
     */
    public function setAccountID(int $value)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Gets AccountDayBudget.
     */
    public function getAccountDayBudget(): ?AccountDayBudgetInfo
    {
        return $this->AccountDayBudget;
    }

    /**
     * Sets AccountDayBudget.
     *
     * @return $this
     */
    public function setAccountDayBudget(?AccountDayBudgetInfo $value = null)
    {
        $this->AccountDayBudget = $value;

        return $this;
    }

    /**
     * Gets Amount.
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @return $this
     */
    public function setAmount(?float $value = null)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets AmountAvailableForTransfer.
     */
    public function getAmountAvailableForTransfer(): ?float
    {
        return $this->AmountAvailableForTransfer;
    }

    /**
     * Sets AmountAvailableForTransfer.
     *
     * @return $this
     */
    public function setAmountAvailableForTransfer(?float $value = null)
    {
        $this->AmountAvailableForTransfer = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Discount.
     */
    public function getDiscount(): ?float
    {
        return $this->Discount;
    }

    /**
     * Sets Discount.
     *
     * @return $this
     */
    public function setDiscount(?float $value = null)
    {
        $this->Discount = $value;

        return $this;
    }

    /**
     * Gets SmsNotification.
     */
    public function getSmsNotification(): ?SmsNotificationInfo
    {
        return $this->SmsNotification;
    }

    /**
     * Sets SmsNotification.
     *
     * @return $this
     */
    public function setSmsNotification(?SmsNotificationInfo $value = null)
    {
        $this->SmsNotification = $value;

        return $this;
    }

    /**
     * Gets EmailNotification.
     */
    public function getEmailNotification(): ?EmailNotificationInfo
    {
        return $this->EmailNotification;
    }

    /**
     * Sets EmailNotification.
     *
     * @return $this
     */
    public function setEmailNotification(?EmailNotificationInfo $value = null)
    {
        $this->EmailNotification = $value;

        return $this;
    }
}
