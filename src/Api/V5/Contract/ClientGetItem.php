<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientGetItem extends ClientBaseItem
{
//    Can be omitted.
//    protected $AccountQuality = null;

//    Can be omitted.
//    protected $Archived = null;

//    Can be omitted.
//    protected $ClientId = null;

//    Can be omitted.
//    protected $CountryId = null;

//    Can be omitted.
//    protected $CreatedAt = null;

//    Can be omitted.
//    protected $Currency = null;

//    Can be omitted.
//    protected $Grants = null;

//    Can be omitted.
//    protected $Bonuses = null;

//    Can be omitted.
//    protected $Login = null;

//    Can be omitted.
//    protected $Notification = null;

//    Can be omitted.
//    protected $OverdraftSumAvailable = null;

//    Can be omitted.
//    protected $Representatives = null;

//    Can be omitted.
//    protected $Restrictions = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $VatRate = null;

//    Can be omitted.
//    protected $TinInfo = null;

//    Can be omitted.
//    protected $ErirAttributes = null;

//    Can be omitted.
//    protected $ForbiddenPlatform = null;

//    Can be omitted.
//    protected $AvailableCampaignTypes = null;

    public function getAccountQuality(): ?float
    {
        return $this->AccountQuality ?? null;
    }

    /**
     * @return $this
     */
    public function setAccountQuality(?float $value = null)
    {
        $this->AccountQuality = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getArchived(): ?string
    {
        return $this->Archived ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setArchived(?string $value = null)
    {
        $this->Archived = $value;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }

    public function getCountryId(): ?int
    {
        return $this->CountryId ?? null;
    }

    /**
     * @return $this
     */
    public function setCountryId(?int $value = null)
    {
        $this->CountryId = $value;

        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->CreatedAt ?? null;
    }

    /**
     * @return $this
     */
    public function setCreatedAt(?string $value = null)
    {
        $this->CreatedAt = $value;

        return $this;
    }

    /**
     * @see CurrencyEnum
     */
    public function getCurrency(): ?string
    {
        return $this->Currency ?? null;
    }

    /**
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
     * @return GrantGetItem[]|null
     */
    public function getGrants(): ?array
    {
        return $this->Grants ?? null;
    }

    /**
     * @param GrantGetItem[]|null $value
     *
     * @return $this
     */
    public function setGrants(?array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }

    public function getBonuses(): ?BonusesItem
    {
        return $this->Bonuses ?? null;
    }

    /**
     * @return $this
     */
    public function setBonuses(?BonusesItem $value = null)
    {
        $this->Bonuses = $value;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login ?? null;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getNotification(): ?ClientNotificationGet
    {
        return $this->Notification ?? null;
    }

    /**
     * @return $this
     */
    public function setNotification(?ClientNotificationGet $value = null)
    {
        $this->Notification = $value;

        return $this;
    }

    public function getOverdraftSumAvailable(): ?int
    {
        return $this->OverdraftSumAvailable ?? null;
    }

    /**
     * @return $this
     */
    public function setOverdraftSumAvailable(?int $value = null)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    /**
     * @return Representative[]|null
     */
    public function getRepresentatives(): ?array
    {
        return $this->Representatives ?? null;
    }

    /**
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
     * @return ClientRestrictionItem[]|null
     */
    public function getRestrictions(): ?array
    {
        return $this->Restrictions ?? null;
    }

    /**
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
     * @return ClientSettingGetItem[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * @param ClientSettingGetItem[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    public function getVatRate(): ?float
    {
        return $this->VatRate ?? null;
    }

    /**
     * @return $this
     */
    public function setVatRate(?float $value = null)
    {
        $this->VatRate = $value;

        return $this;
    }

    public function getTinInfo(): ?TinInfoGet
    {
        return $this->TinInfo ?? null;
    }

    /**
     * @return $this
     */
    public function setTinInfo(?TinInfoGet $value = null)
    {
        $this->TinInfo = $value;

        return $this;
    }

    public function getErirAttributes(): ?ErirAttributesGet
    {
        return $this->ErirAttributes ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAttributes(?ErirAttributesGet $value = null)
    {
        $this->ErirAttributes = $value;

        return $this;
    }

    /**
     * @see ForbiddenPlatformEnum
     */
    public function getForbiddenPlatform(): ?string
    {
        return $this->ForbiddenPlatform ?? null;
    }

    /**
     * @see ForbiddenPlatformEnum
     *
     * @return $this
     */
    public function setForbiddenPlatform(?string $value = null)
    {
        $this->ForbiddenPlatform = $value;

        return $this;
    }

    /**
     * @see AvailableCampaignTypeEnum
     *
     * @return string[]|null
     */
    public function getAvailableCampaignTypes(): ?array
    {
        return $this->AvailableCampaignTypes ?? null;
    }

    /**
     * @see AvailableCampaignTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAvailableCampaignTypes(?array $value = null)
    {
        $this->AvailableCampaignTypes = $value;

        return $this;
    }
}
