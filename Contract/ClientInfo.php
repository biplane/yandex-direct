<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientInfo
{
    /**
     * @var string
     */
    protected $Phone;
    /**
     * @var string
     */
    protected $DateCreate;
    /**
     * @var string
     */
    protected $FIO;
    /**
     * @var string
     */
    protected $Email;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $StatusArch;
    /**
     * @var float
     */
    protected $Discount;
    /**
     * @var float
     */
    protected $OverdraftSumAvailable;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var float
     */
    protected $VATRate;
    /**
     * @var string[]
     */
    protected $ClientCurrencies;
    /**
     * @var string
     */
    protected $SmsPhone;
    /**
     * @var string[]
     */
    protected $CampaignEmails;
    /**
     * @var ClientRight[]
     */
    protected $ClientRights;
    /**
     * @var string
     */
    protected $Role;
    /**
     * @var string
     */
    protected $NonResident;
    /**
     * @var string
     */
    protected $SendNews;
    /**
     * @var string
     */
    protected $SendAccNews;
    /**
     * @var string
     */
    protected $SendWarn;
    /**
     * @var string[]
     */
    protected $ManagersLogins;

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
     * Gets the Phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Sets the Phone.
     *
     * @param string $Phone
     *
     * @return ClientInfo
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * Gets the DateCreate.
     *
     * @return string
     */
    public function getDateCreate()
    {
        return $this->DateCreate;
    }

    /**
     * Sets the DateCreate.
     *
     * @param string $DateCreate
     *
     * @return ClientInfo
     */
    public function setDateCreate($DateCreate)
    {
        $this->DateCreate = $DateCreate;

        return $this;
    }

    /**
     * Gets the FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets the FIO.
     *
     * @param string $FIO
     *
     * @return ClientInfo
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * Gets the Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets the Email.
     *
     * @param string $Email
     *
     * @return ClientInfo
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

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
     * @return ClientInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the StatusArch.
     *
     * @return string
     */
    public function getStatusArch()
    {
        return $this->StatusArch;
    }

    /**
     * Sets the StatusArch.
     *
     * @param string $StatusArch
     *
     * @return ClientInfo
     */
    public function setStatusArch($StatusArch)
    {
        $this->StatusArch = $StatusArch;

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
     * @return ClientInfo
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

        return $this;
    }

    /**
     * Gets the OverdraftSumAvailable.
     *
     * @return float
     */
    public function getOverdraftSumAvailable()
    {
        return $this->OverdraftSumAvailable;
    }

    /**
     * Sets the OverdraftSumAvailable.
     *
     * @param float $OverdraftSumAvailable
     *
     * @return ClientInfo
     */
    public function setOverdraftSumAvailable($OverdraftSumAvailable)
    {
        $this->OverdraftSumAvailable = $OverdraftSumAvailable;

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
     * @return ClientInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the VATRate.
     *
     * @return float
     */
    public function getVATRate()
    {
        return $this->VATRate;
    }

    /**
     * Sets the VATRate.
     *
     * @param float $VATRate
     *
     * @return ClientInfo
     */
    public function setVATRate($VATRate)
    {
        $this->VATRate = $VATRate;

        return $this;
    }

    /**
     * Gets the ClientCurrencies.
     *
     * @return string[]
     */
    public function getClientCurrencies()
    {
        return $this->ClientCurrencies;
    }

    /**
     * Sets the ClientCurrencies.
     *
     * @param string[] $ClientCurrencies
     *
     * @return ClientInfo
     */
    public function setClientCurrencies(array $ClientCurrencies)
    {
        $this->ClientCurrencies = $ClientCurrencies;

        return $this;
    }

    /**
     * Gets the SmsPhone.
     *
     * @return string
     */
    public function getSmsPhone()
    {
        return $this->SmsPhone;
    }

    /**
     * Sets the SmsPhone.
     *
     * @param string $SmsPhone
     *
     * @return ClientInfo
     */
    public function setSmsPhone($SmsPhone)
    {
        $this->SmsPhone = $SmsPhone;

        return $this;
    }

    /**
     * Gets the CampaignEmails.
     *
     * @return string[]
     */
    public function getCampaignEmails()
    {
        return $this->CampaignEmails;
    }

    /**
     * Sets the CampaignEmails.
     *
     * @param string[] $CampaignEmails
     *
     * @return ClientInfo
     */
    public function setCampaignEmails(array $CampaignEmails)
    {
        $this->CampaignEmails = $CampaignEmails;

        return $this;
    }

    /**
     * Gets the ClientRights.
     *
     * @return ClientRight[]
     */
    public function getClientRights()
    {
        return $this->ClientRights;
    }

    /**
     * Sets the ClientRights.
     *
     * @param ClientRight[] $ClientRights
     *
     * @return ClientInfo
     */
    public function setClientRights(array $ClientRights)
    {
        $this->ClientRights = $ClientRights;

        return $this;
    }

    /**
     * Gets the Role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Sets the Role.
     *
     * @param string $Role
     *
     * @return ClientInfo
     */
    public function setRole($Role)
    {
        $this->Role = $Role;

        return $this;
    }

    /**
     * Gets the NonResident.
     *
     * @return string
     */
    public function getNonResident()
    {
        return $this->NonResident;
    }

    /**
     * Sets the NonResident.
     *
     * @param string $NonResident
     *
     * @return ClientInfo
     */
    public function setNonResident($NonResident)
    {
        $this->NonResident = $NonResident;

        return $this;
    }

    /**
     * Gets the SendNews.
     *
     * @return string
     */
    public function getSendNews()
    {
        return $this->SendNews;
    }

    /**
     * Sets the SendNews.
     *
     * @param string $SendNews
     *
     * @return ClientInfo
     */
    public function setSendNews($SendNews)
    {
        $this->SendNews = $SendNews;

        return $this;
    }

    /**
     * Gets the SendAccNews.
     *
     * @return string
     */
    public function getSendAccNews()
    {
        return $this->SendAccNews;
    }

    /**
     * Sets the SendAccNews.
     *
     * @param string $SendAccNews
     *
     * @return ClientInfo
     */
    public function setSendAccNews($SendAccNews)
    {
        $this->SendAccNews = $SendAccNews;

        return $this;
    }

    /**
     * Gets the SendWarn.
     *
     * @return string
     */
    public function getSendWarn()
    {
        return $this->SendWarn;
    }

    /**
     * Sets the SendWarn.
     *
     * @param string $SendWarn
     *
     * @return ClientInfo
     */
    public function setSendWarn($SendWarn)
    {
        $this->SendWarn = $SendWarn;

        return $this;
    }

    /**
     * Gets the ManagersLogins.
     *
     * @return string[]
     */
    public function getManagersLogins()
    {
        return $this->ManagersLogins;
    }

    /**
     * Sets the ManagersLogins.
     *
     * @param string[] $ManagersLogins
     *
     * @return ClientInfo
     */
    public function setManagersLogins(array $ManagersLogins)
    {
        $this->ManagersLogins = $ManagersLogins;

        return $this;
    }
}
