<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Phone.
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @return $this
     */
    public function setPhone(?string $value = null)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Gets DateCreate.
     */
    public function getDateCreate(): ?string
    {
        return $this->DateCreate;
    }

    /**
     * Sets DateCreate.
     *
     * @return $this
     */
    public function setDateCreate(?string $value = null)
    {
        $this->DateCreate = $value;

        return $this;
    }

    /**
     * Gets FIO.
     */
    public function getFIO(): string
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @return $this
     */
    public function setFIO(string $value)
    {
        $this->FIO = $value;

        return $this;
    }

    /**
     * Gets Email.
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets StatusArch.
     */
    public function getStatusArch(): ?string
    {
        return $this->StatusArch;
    }

    /**
     * Sets StatusArch.
     *
     * @return $this
     */
    public function setStatusArch(?string $value = null)
    {
        $this->StatusArch = $value;

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
     * Gets OverdraftSumAvailable.
     */
    public function getOverdraftSumAvailable(): ?float
    {
        return $this->OverdraftSumAvailable;
    }

    /**
     * Sets OverdraftSumAvailable.
     *
     * @return $this
     */
    public function setOverdraftSumAvailable(?float $value = null)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    /**
     * Gets OverdraftSumAvailableInCurrency.
     */
    public function getOverdraftSumAvailableInCurrency(): ?float
    {
        return $this->OverdraftSumAvailableInCurrency;
    }

    /**
     * Sets OverdraftSumAvailableInCurrency.
     *
     * @return $this
     */
    public function setOverdraftSumAvailableInCurrency(?float $value = null)
    {
        $this->OverdraftSumAvailableInCurrency = $value;

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
     * Gets VATRate.
     */
    public function getVATRate(): ?float
    {
        return $this->VATRate;
    }

    /**
     * Sets VATRate.
     *
     * @return $this
     */
    public function setVATRate(?float $value = null)
    {
        $this->VATRate = $value;

        return $this;
    }

    /**
     * Gets ClientCurrencies.
     *
     * @return string[]|null
     */
    public function getClientCurrencies(): ?array
    {
        return $this->ClientCurrencies;
    }

    /**
     * Sets ClientCurrencies.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setClientCurrencies(?array $value = null)
    {
        $this->ClientCurrencies = $value;

        return $this;
    }

    /**
     * Gets DisplayStoreRating.
     */
    public function getDisplayStoreRating(): ?string
    {
        return $this->DisplayStoreRating;
    }

    /**
     * Sets DisplayStoreRating.
     *
     * @return $this
     */
    public function setDisplayStoreRating(?string $value = null)
    {
        $this->DisplayStoreRating = $value;

        return $this;
    }

    /**
     * Gets SmsPhone.
     */
    public function getSmsPhone(): ?string
    {
        return $this->SmsPhone;
    }

    /**
     * Sets SmsPhone.
     *
     * @return $this
     */
    public function setSmsPhone(?string $value = null)
    {
        $this->SmsPhone = $value;

        return $this;
    }

    /**
     * Gets CampaignEmails.
     *
     * @return string[]|null
     */
    public function getCampaignEmails(): ?array
    {
        return $this->CampaignEmails;
    }

    /**
     * Sets CampaignEmails.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCampaignEmails(?array $value = null)
    {
        $this->CampaignEmails = $value;

        return $this;
    }

    /**
     * Gets ClientRights.
     *
     * @return ClientRight[]|null
     */
    public function getClientRights(): ?array
    {
        return $this->ClientRights;
    }

    /**
     * Sets ClientRights.
     *
     * @param ClientRight[]|null $value
     *
     * @return $this
     */
    public function setClientRights(?array $value = null)
    {
        $this->ClientRights = $value;

        return $this;
    }

    /**
     * Gets Role.
     */
    public function getRole(): ?string
    {
        return $this->Role;
    }

    /**
     * Sets Role.
     *
     * @return $this
     */
    public function setRole(?string $value = null)
    {
        $this->Role = $value;

        return $this;
    }

    /**
     * Gets NonResident.
     */
    public function getNonResident(): ?string
    {
        return $this->NonResident;
    }

    /**
     * Sets NonResident.
     *
     * @return $this
     */
    public function setNonResident(?string $value = null)
    {
        $this->NonResident = $value;

        return $this;
    }

    /**
     * Gets SendNews.
     */
    public function getSendNews(): ?string
    {
        return $this->SendNews;
    }

    /**
     * Sets SendNews.
     *
     * @return $this
     */
    public function setSendNews(?string $value = null)
    {
        $this->SendNews = $value;

        return $this;
    }

    /**
     * Gets SendAccNews.
     */
    public function getSendAccNews(): ?string
    {
        return $this->SendAccNews;
    }

    /**
     * Sets SendAccNews.
     *
     * @return $this
     */
    public function setSendAccNews(?string $value = null)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    /**
     * Gets SendWarn.
     */
    public function getSendWarn(): ?string
    {
        return $this->SendWarn;
    }

    /**
     * Sets SendWarn.
     *
     * @return $this
     */
    public function setSendWarn(?string $value = null)
    {
        $this->SendWarn = $value;

        return $this;
    }

    /**
     * Gets ManagersLogins.
     *
     * @return string[]|null
     */
    public function getManagersLogins(): ?array
    {
        return $this->ManagersLogins;
    }

    /**
     * Sets ManagersLogins.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setManagersLogins(?array $value = null)
    {
        $this->ManagersLogins = $value;

        return $this;
    }

    /**
     * Gets SharedAccountEnabled.
     */
    public function getSharedAccountEnabled(): ?string
    {
        return $this->SharedAccountEnabled;
    }

    /**
     * Sets SharedAccountEnabled.
     *
     * @return $this
     */
    public function setSharedAccountEnabled(?string $value = null)
    {
        $this->SharedAccountEnabled = $value;

        return $this;
    }
}
