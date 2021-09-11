<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientGetItem extends ClientBaseItem
{
//    Can be omit.
//    protected $AccountQuality = null;

//    Can be omit.
//    protected $Archived = null;

//    Can be omit.
//    protected $ClientId = null;

//    Can be omit.
//    protected $CountryId = null;

//    Can be omit.
//    protected $CreatedAt = null;

//    Can be omit.
//    protected $Currency = null;

//    Can be omit.
//    protected $Grants = null;

//    Can be omit.
//    protected $Bonuses = null;

//    Can be omit.
//    protected $Login = null;

//    Can be omit.
//    protected $Notification = null;

//    Can be omit.
//    protected $OverdraftSumAvailable = null;

//    Can be omit.
//    protected $Representatives = null;

//    Can be omit.
//    protected $Restrictions = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $VatRate = null;

    /**
     * Creates a new instance of ClientGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AccountQuality.
     */
    public function getAccountQuality(): ?float
    {
        return $this->AccountQuality ?? null;
    }

    /**
     * Sets AccountQuality.
     *
     * @return $this
     */
    public function setAccountQuality(?float $value = null)
    {
        $this->AccountQuality = $value;

        return $this;
    }

    /**
     * Gets Archived.
     *
     * @see YesNoEnum
     */
    public function getArchived(): ?string
    {
        return $this->Archived ?? null;
    }

    /**
     * Sets Archived.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setArchived(?string $value = null)
    {
        $this->Archived = $value;

        return $this;
    }

    /**
     * Gets ClientId.
     */
    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * Sets ClientId.
     *
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * Gets CountryId.
     */
    public function getCountryId(): ?int
    {
        return $this->CountryId ?? null;
    }

    /**
     * Sets CountryId.
     *
     * @return $this
     */
    public function setCountryId(?int $value = null)
    {
        $this->CountryId = $value;

        return $this;
    }

    /**
     * Gets CreatedAt.
     */
    public function getCreatedAt(): ?string
    {
        return $this->CreatedAt ?? null;
    }

    /**
     * Sets CreatedAt.
     *
     * @return $this
     */
    public function setCreatedAt(?string $value = null)
    {
        $this->CreatedAt = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @see CurrencyEnum
     */
    public function getCurrency(): ?string
    {
        return $this->Currency ?? null;
    }

    /**
     * Sets Currency.
     *
     * @see CurrencyEnum
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Grants.
     *
     * @return GrantGetItem[]|null
     */
    public function getGrants(): ?array
    {
        return $this->Grants ?? null;
    }

    /**
     * Sets Grants.
     *
     * @param GrantGetItem[]|null $value
     *
     * @return $this
     */
    public function setGrants(?array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }

    /**
     * Gets Bonuses.
     */
    public function getBonuses(): ?BonusesItem
    {
        return $this->Bonuses ?? null;
    }

    /**
     * Sets Bonuses.
     *
     * @return $this
     */
    public function setBonuses(?BonusesItem $value = null)
    {
        $this->Bonuses = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
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
     * Gets Notification.
     */
    public function getNotification(): ?ClientNotificationGet
    {
        return $this->Notification ?? null;
    }

    /**
     * Sets Notification.
     *
     * @return $this
     */
    public function setNotification(?ClientNotificationGet $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Gets OverdraftSumAvailable.
     */
    public function getOverdraftSumAvailable(): ?int
    {
        return $this->OverdraftSumAvailable ?? null;
    }

    /**
     * Sets OverdraftSumAvailable.
     *
     * @return $this
     */
    public function setOverdraftSumAvailable(?int $value = null)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    /**
     * Gets Representatives.
     *
     * @return Representative[]|null
     */
    public function getRepresentatives(): ?array
    {
        return $this->Representatives ?? null;
    }

    /**
     * Sets Representatives.
     *
     * @param Representative[]|null $value
     *
     * @return $this
     */
    public function setRepresentatives(?array $value = null)
    {
        $this->Representatives = $value;

        return $this;
    }

    /**
     * Gets Restrictions.
     *
     * @return ClientRestrictionItem[]|null
     */
    public function getRestrictions(): ?array
    {
        return $this->Restrictions ?? null;
    }

    /**
     * Sets Restrictions.
     *
     * @param ClientRestrictionItem[]|null $value
     *
     * @return $this
     */
    public function setRestrictions(?array $value = null)
    {
        $this->Restrictions = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return ClientSettingGetItem[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param ClientSettingGetItem[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets Type.
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets VatRate.
     */
    public function getVatRate(): ?float
    {
        return $this->VatRate ?? null;
    }

    /**
     * Sets VatRate.
     *
     * @return $this
     */
    public function setVatRate(?float $value = null)
    {
        $this->VatRate = $value;

        return $this;
    }
}
