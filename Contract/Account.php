<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Account
{
    /**
     * @var string
     */
    protected $AgencyName;
    /**
     * @var int
     */
    protected $AccountID;
    /**
     * @var float
     */
    protected $Amount;
    /**
     * @var float
     */
    protected $AmountAvailableForTransfer;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var float
     */
    protected $Discount;
    /**
     * @var SmsNotificationInfo
     */
    protected $SmsNotification;
    /**
     * @var EmailNotificationInfo
     */
    protected $EmailNotification;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the AgencyName.
     *
     * @return string
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * Sets the AgencyName.
     *
     * @param string $AgencyName
     *
     * @return Account
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;

        return $this;
    }

    /**
     * Gets the AccountID.
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets the AccountID.
     *
     * @param int $AccountID
     *
     * @return Account
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;

        return $this;
    }

    /**
     * Gets the Amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets the Amount.
     *
     * @param float $Amount
     *
     * @return Account
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * Gets the AmountAvailableForTransfer.
     *
     * @return float
     */
    public function getAmountAvailableForTransfer()
    {
        return $this->AmountAvailableForTransfer;
    }

    /**
     * Sets the AmountAvailableForTransfer.
     *
     * @param float $AmountAvailableForTransfer
     *
     * @return Account
     */
    public function setAmountAvailableForTransfer($AmountAvailableForTransfer)
    {
        $this->AmountAvailableForTransfer = $AmountAvailableForTransfer;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return Account
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return Account
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the Discount.
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * Sets the Discount.
     *
     * @param float $Discount
     *
     * @return Account
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

        return $this;
    }

    /**
     * Gets the SmsNotification.
     *
     * @return SmsNotificationInfo
     */
    public function getSmsNotification()
    {
        return $this->SmsNotification;
    }

    /**
     * Sets the SmsNotification.
     *
     * @param SmsNotificationInfo $SmsNotification
     *
     * @return Account
     */
    public function setSmsNotification(SmsNotificationInfo $SmsNotification)
    {
        $this->SmsNotification = $SmsNotification;

        return $this;
    }

    /**
     * Gets the EmailNotification.
     *
     * @return EmailNotificationInfo
     */
    public function getEmailNotification()
    {
        return $this->EmailNotification;
    }

    /**
     * Sets the EmailNotification.
     *
     * @param EmailNotificationInfo $EmailNotification
     *
     * @return Account
     */
    public function setEmailNotification(EmailNotificationInfo $EmailNotification)
    {
        $this->EmailNotification = $EmailNotification;

        return $this;
    }
}