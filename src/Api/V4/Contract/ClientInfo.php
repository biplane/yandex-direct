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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    /**
     * @return $this
     */
    public function setPhone(?string $value = null)
    {
        $this->Phone = $value;

        return $this;
    }

    public function getDateCreate(): ?string
    {
        return $this->DateCreate;
    }

    /**
     * @return $this
     */
    public function setDateCreate(?string $value = null)
    {
        $this->DateCreate = $value;

        return $this;
    }

    public function getFIO(): string
    {
        return $this->FIO;
    }

    /**
     * @return $this
     */
    public function setFIO(string $value)
    {
        $this->FIO = $value;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getStatusArch(): ?string
    {
        return $this->StatusArch;
    }

    /**
     * @return $this
     */
    public function setStatusArch(?string $value = null)
    {
        $this->StatusArch = $value;

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

    public function getOverdraftSumAvailable(): ?float
    {
        return $this->OverdraftSumAvailable;
    }

    /**
     * @return $this
     */
    public function setOverdraftSumAvailable(?float $value = null)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    public function getOverdraftSumAvailableInCurrency(): ?float
    {
        return $this->OverdraftSumAvailableInCurrency;
    }

    /**
     * @return $this
     */
    public function setOverdraftSumAvailableInCurrency(?float $value = null)
    {
        $this->OverdraftSumAvailableInCurrency = $value;

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

    public function getVATRate(): ?float
    {
        return $this->VATRate;
    }

    /**
     * @return $this
     */
    public function setVATRate(?float $value = null)
    {
        $this->VATRate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getClientCurrencies(): ?array
    {
        return $this->ClientCurrencies;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setClientCurrencies(?array $value = null)
    {
        $this->ClientCurrencies = $value;

        return $this;
    }

    public function getDisplayStoreRating(): ?string
    {
        return $this->DisplayStoreRating;
    }

    /**
     * @return $this
     */
    public function setDisplayStoreRating(?string $value = null)
    {
        $this->DisplayStoreRating = $value;

        return $this;
    }

    public function getSmsPhone(): ?string
    {
        return $this->SmsPhone;
    }

    /**
     * @return $this
     */
    public function setSmsPhone(?string $value = null)
    {
        $this->SmsPhone = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCampaignEmails(): ?array
    {
        return $this->CampaignEmails;
    }

    /**
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
     * @return ClientRight[]|null
     */
    public function getClientRights(): ?array
    {
        return $this->ClientRights;
    }

    /**
     * @param ClientRight[]|null $value
     *
     * @return $this
     */
    public function setClientRights(?array $value = null)
    {
        $this->ClientRights = $value;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    /**
     * @return $this
     */
    public function setRole(?string $value = null)
    {
        $this->Role = $value;

        return $this;
    }

    public function getNonResident(): ?string
    {
        return $this->NonResident;
    }

    /**
     * @return $this
     */
    public function setNonResident(?string $value = null)
    {
        $this->NonResident = $value;

        return $this;
    }

    public function getSendNews(): ?string
    {
        return $this->SendNews;
    }

    /**
     * @return $this
     */
    public function setSendNews(?string $value = null)
    {
        $this->SendNews = $value;

        return $this;
    }

    public function getSendAccNews(): ?string
    {
        return $this->SendAccNews;
    }

    /**
     * @return $this
     */
    public function setSendAccNews(?string $value = null)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    public function getSendWarn(): ?string
    {
        return $this->SendWarn;
    }

    /**
     * @return $this
     */
    public function setSendWarn(?string $value = null)
    {
        $this->SendWarn = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getManagersLogins(): ?array
    {
        return $this->ManagersLogins;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setManagersLogins(?array $value = null)
    {
        $this->ManagersLogins = $value;

        return $this;
    }

    public function getSharedAccountEnabled(): ?string
    {
        return $this->SharedAccountEnabled;
    }

    /**
     * @return $this
     */
    public function setSharedAccountEnabled(?string $value = null)
    {
        $this->SharedAccountEnabled = $value;

        return $this;
    }
}
