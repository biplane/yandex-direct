<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Account
{

    protected $AgencyName = null;

    protected $AccountID = null;

    protected $Amount = null;

    protected $AmountAvailableForTransfer = null;

    protected $Currency = null;

    protected $Login = null;

    protected $Discount = null;

    protected $SmsNotification = null;

    protected $EmailNotification = null;

    /**
     * Creates a new instance of Account.
     *
     * @return Account
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AgencyName.
     *
     * @return string|null
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * Sets AgencyName.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAgencyName($value = null)
    {
        $this->AgencyName = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @param int $value
     * @return $this
     */
    public function setAccountID($value)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Gets Amount.
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @param float|null $value
     * @return $this
     */
    public function setAmount($value = null)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets AmountAvailableForTransfer.
     *
     * @return float|null
     */
    public function getAmountAvailableForTransfer()
    {
        return $this->AmountAvailableForTransfer;
    }

    /**
     * Sets AmountAvailableForTransfer.
     *
     * @param float|null $value
     * @return $this
     */
    public function setAmountAvailableForTransfer($value = null)
    {
        $this->AmountAvailableForTransfer = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Discount.
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * Sets Discount.
     *
     * @param float|null $value
     * @return $this
     */
    public function setDiscount($value = null)
    {
        $this->Discount = $value;

        return $this;
    }

    /**
     * Gets SmsNotification.
     *
     * @return SmsNotificationInfo|null
     */
    public function getSmsNotification()
    {
        return $this->SmsNotification;
    }

    /**
     * Sets SmsNotification.
     *
     * @param SmsNotificationInfo|null $value
     * @return $this
     */
    public function setSmsNotification(SmsNotificationInfo $value = null)
    {
        $this->SmsNotification = $value;

        return $this;
    }

    /**
     * Gets EmailNotification.
     *
     * @return EmailNotificationInfo|null
     */
    public function getEmailNotification()
    {
        return $this->EmailNotification;
    }

    /**
     * Sets EmailNotification.
     *
     * @param EmailNotificationInfo|null $value
     * @return $this
     */
    public function setEmailNotification(EmailNotificationInfo $value = null)
    {
        $this->EmailNotification = $value;

        return $this;
    }


}

