<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientInfo
{

    protected $Phone = null;

    protected $DateCreate = null;

    protected $FIO = null;

    protected $Email = null;

    protected $Login = null;

    protected $StatusArch = null;

    protected $Discount = null;

    protected $OverdraftSumAvailable = null;

    protected $OverdraftSumAvailableInCurrency = null;

    protected $Currency = null;

    protected $VATRate = null;

    protected $ClientCurrencies = null;

    protected $DisplayStoreRating = null;

    protected $SmsPhone = null;

    protected $CampaignEmails = null;

    protected $ClientRights = null;

    protected $Role = null;

    protected $NonResident = null;

    protected $SendNews = null;

    protected $SendAccNews = null;

    protected $SendWarn = null;

    protected $ManagersLogins = null;

    protected $SharedAccountEnabled = null;

    /**
     * Creates a new instance of ClientInfo.
     *
     * @return ClientInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPhone($value = null)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Gets DateCreate.
     *
     * @return string|null
     */
    public function getDateCreate()
    {
        return $this->DateCreate;
    }

    /**
     * Sets DateCreate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDateCreate($value = null)
    {
        $this->DateCreate = $value;

        return $this;
    }

    /**
     * Gets FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @param string $value
     * @return $this
     */
    public function setFIO($value)
    {
        $this->FIO = $value;

        return $this;
    }

    /**
     * Gets Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets StatusArch.
     *
     * @return string|null
     */
    public function getStatusArch()
    {
        return $this->StatusArch;
    }

    /**
     * Sets StatusArch.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatusArch($value = null)
    {
        $this->StatusArch = $value;

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
     * Gets OverdraftSumAvailable.
     *
     * @return float|null
     */
    public function getOverdraftSumAvailable()
    {
        return $this->OverdraftSumAvailable;
    }

    /**
     * Sets OverdraftSumAvailable.
     *
     * @param float|null $value
     * @return $this
     */
    public function setOverdraftSumAvailable($value = null)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    /**
     * Gets OverdraftSumAvailableInCurrency.
     *
     * @return float|null
     */
    public function getOverdraftSumAvailableInCurrency()
    {
        return $this->OverdraftSumAvailableInCurrency;
    }

    /**
     * Sets OverdraftSumAvailableInCurrency.
     *
     * @param float|null $value
     * @return $this
     */
    public function setOverdraftSumAvailableInCurrency($value = null)
    {
        $this->OverdraftSumAvailableInCurrency = $value;

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
     * Gets VATRate.
     *
     * @return float|null
     */
    public function getVATRate()
    {
        return $this->VATRate;
    }

    /**
     * Sets VATRate.
     *
     * @param float|null $value
     * @return $this
     */
    public function setVATRate($value = null)
    {
        $this->VATRate = $value;

        return $this;
    }

    /**
     * Gets ClientCurrencies.
     *
     * @return string[]|null
     */
    public function getClientCurrencies()
    {
        return $this->ClientCurrencies;
    }

    /**
     * Sets ClientCurrencies.
     *
     * @param array|null $value
     * @return $this
     */
    public function setClientCurrencies(array $value = null)
    {
        $this->ClientCurrencies = $value;

        return $this;
    }

    /**
     * Gets DisplayStoreRating.
     *
     * @return string|null
     */
    public function getDisplayStoreRating()
    {
        return $this->DisplayStoreRating;
    }

    /**
     * Sets DisplayStoreRating.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDisplayStoreRating($value = null)
    {
        $this->DisplayStoreRating = $value;

        return $this;
    }

    /**
     * Gets SmsPhone.
     *
     * @return string|null
     */
    public function getSmsPhone()
    {
        return $this->SmsPhone;
    }

    /**
     * Sets SmsPhone.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSmsPhone($value = null)
    {
        $this->SmsPhone = $value;

        return $this;
    }

    /**
     * Gets CampaignEmails.
     *
     * @return string[]|null
     */
    public function getCampaignEmails()
    {
        return $this->CampaignEmails;
    }

    /**
     * Sets CampaignEmails.
     *
     * @param array|null $value
     * @return $this
     */
    public function setCampaignEmails(array $value = null)
    {
        $this->CampaignEmails = $value;

        return $this;
    }

    /**
     * Gets ClientRights.
     *
     * @return ClientRight[]|null
     */
    public function getClientRights()
    {
        return $this->ClientRights;
    }

    /**
     * Sets ClientRights.
     *
     * @param array|null $value
     * @return $this
     */
    public function setClientRights(array $value = null)
    {
        $this->ClientRights = $value;

        return $this;
    }

    /**
     * Gets Role.
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Sets Role.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRole($value = null)
    {
        $this->Role = $value;

        return $this;
    }

    /**
     * Gets NonResident.
     *
     * @return string|null
     */
    public function getNonResident()
    {
        return $this->NonResident;
    }

    /**
     * Sets NonResident.
     *
     * @param string|null $value
     * @return $this
     */
    public function setNonResident($value = null)
    {
        $this->NonResident = $value;

        return $this;
    }

    /**
     * Gets SendNews.
     *
     * @return string|null
     */
    public function getSendNews()
    {
        return $this->SendNews;
    }

    /**
     * Sets SendNews.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSendNews($value = null)
    {
        $this->SendNews = $value;

        return $this;
    }

    /**
     * Gets SendAccNews.
     *
     * @return string|null
     */
    public function getSendAccNews()
    {
        return $this->SendAccNews;
    }

    /**
     * Sets SendAccNews.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSendAccNews($value = null)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    /**
     * Gets SendWarn.
     *
     * @return string|null
     */
    public function getSendWarn()
    {
        return $this->SendWarn;
    }

    /**
     * Sets SendWarn.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSendWarn($value = null)
    {
        $this->SendWarn = $value;

        return $this;
    }

    /**
     * Gets ManagersLogins.
     *
     * @return string[]|null
     */
    public function getManagersLogins()
    {
        return $this->ManagersLogins;
    }

    /**
     * Sets ManagersLogins.
     *
     * @param array|null $value
     * @return $this
     */
    public function setManagersLogins(array $value = null)
    {
        $this->ManagersLogins = $value;

        return $this;
    }

    /**
     * Gets SharedAccountEnabled.
     *
     * @return string|null
     */
    public function getSharedAccountEnabled()
    {
        return $this->SharedAccountEnabled;
    }

    /**
     * Sets SharedAccountEnabled.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSharedAccountEnabled($value = null)
    {
        $this->SharedAccountEnabled = $value;

        return $this;
    }


}

