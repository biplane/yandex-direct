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
//    protected $AccountQuality;

//    Can be omitted.
//    protected $Archived;

//    Can be omitted.
//    protected $ClientId;

//    Can be omitted.
//    protected $CountryId;

//    Can be omitted.
//    protected $CreatedAt;

//    Can be omitted.
//    protected $Currency;

//    Can be omitted.
//    protected $Grants;

//    Can be omitted.
//    protected $Bonuses;

//    Can be omitted.
//    protected $Login;

//    Can be omitted.
//    protected $Notification;

//    Can be omitted.
//    protected $OverdraftSumAvailable;

//    Can be omitted.
//    protected $Representatives;

//    Can be omitted.
//    protected $Restrictions;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $VatRate;

//    Can be omitted.
//    protected $TinInfo;

//    Can be omitted.
//    protected $ErirAttributes;

//    Can be omitted.
//    protected $ForbiddenPlatform;

//    Can be omitted.
//    protected $AvailableCampaignTypes;

//    Can be omitted.
//    protected $AvailableAdGroupTypes;

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
     * Get AccountQuality
     */
    public function getAccountQuality(): ?float
    {
        return $this->AccountQuality ?? null;
    }

    /**
     * Set AccountQuality
     *
     * @return $this
     */
    public function setAccountQuality(?float $value)
    {
        $this->AccountQuality = $value;

        return $this;
    }

    /**
     * Get Archived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getArchived(): ?string
    {
        return $this->Archived ?? null;
    }

    /**
     * Set Archived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setArchived(?string $value)
    {
        $this->Archived = $value;

        return $this;
    }

    /**
     * Get ClientId
     */
    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * Set ClientId
     *
     * @return $this
     */
    public function setClientId(?int $value)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * Get CountryId
     */
    public function getCountryId(): ?int
    {
        return $this->CountryId ?? null;
    }

    /**
     * Set CountryId
     *
     * @return $this
     */
    public function setCountryId(?int $value)
    {
        $this->CountryId = $value;

        return $this;
    }

    /**
     * Get CreatedAt
     */
    public function getCreatedAt(): ?string
    {
        return $this->CreatedAt ?? null;
    }

    /**
     * Set CreatedAt
     *
     * @return $this
     */
    public function setCreatedAt(?string $value)
    {
        $this->CreatedAt = $value;

        return $this;
    }

    /**
     * Get Currency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum
     *
     * @return 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP'|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency ?? null;
    }

    /**
     * Set Currency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum
     *
     * @param 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP'|null $value
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Grants
     *
     * @return list<GrantGetItem>
     */
    public function getGrants(): array
    {
        return $this->Grants ?? [];
    }

    /**
     * Set Grants
     *
     * @param list<GrantGetItem> $value
     *
     * @return $this
     */
    public function setGrants(array $value)
    {
        $this->Grants = $value;

        return $this;
    }

    /**
     * Get Bonuses
     */
    public function getBonuses(): ?BonusesItem
    {
        return $this->Bonuses ?? null;
    }

    /**
     * Set Bonuses
     *
     * @return $this
     */
    public function setBonuses(?BonusesItem $value)
    {
        $this->Bonuses = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
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
     * Get Notification
     */
    public function getNotification(): ?ClientNotificationGet
    {
        return $this->Notification ?? null;
    }

    /**
     * Set Notification
     *
     * @return $this
     */
    public function setNotification(?ClientNotificationGet $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Get OverdraftSumAvailable
     */
    public function getOverdraftSumAvailable(): ?int
    {
        return $this->OverdraftSumAvailable ?? null;
    }

    /**
     * Set OverdraftSumAvailable
     *
     * @return $this
     */
    public function setOverdraftSumAvailable(?int $value)
    {
        $this->OverdraftSumAvailable = $value;

        return $this;
    }

    /**
     * Get Representatives
     *
     * @return list<Representative>
     */
    public function getRepresentatives(): array
    {
        return $this->Representatives ?? [];
    }

    /**
     * Set Representatives
     *
     * @param list<Representative> $value
     *
     * @return $this
     */
    public function setRepresentatives(array $value)
    {
        $this->Representatives = $value;

        return $this;
    }

    /**
     * Get Restrictions
     *
     * @return list<ClientRestrictionItem>
     */
    public function getRestrictions(): array
    {
        return $this->Restrictions ?? [];
    }

    /**
     * Set Restrictions
     *
     * @param list<ClientRestrictionItem> $value
     *
     * @return $this
     */
    public function setRestrictions(array $value)
    {
        $this->Restrictions = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<ClientSettingGetItem>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<ClientSettingGetItem> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get Type
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get VatRate
     */
    public function getVatRate(): ?float
    {
        return $this->VatRate ?? null;
    }

    /**
     * Set VatRate
     *
     * @return $this
     */
    public function setVatRate(?float $value)
    {
        $this->VatRate = $value;

        return $this;
    }

    /**
     * Get TinInfo
     */
    public function getTinInfo(): ?TinInfoGet
    {
        return $this->TinInfo ?? null;
    }

    /**
     * Set TinInfo
     *
     * @return $this
     */
    public function setTinInfo(?TinInfoGet $value)
    {
        $this->TinInfo = $value;

        return $this;
    }

    /**
     * Get ErirAttributes
     */
    public function getErirAttributes(): ?ErirAttributesGet
    {
        return $this->ErirAttributes ?? null;
    }

    /**
     * Set ErirAttributes
     *
     * @return $this
     */
    public function setErirAttributes(?ErirAttributesGet $value)
    {
        $this->ErirAttributes = $value;

        return $this;
    }

    /**
     * Get ForbiddenPlatform
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ForbiddenPlatformEnum
     *
     * @return 'SEARCH'|'NETWORK'|'NONE'|null
     */
    public function getForbiddenPlatform(): ?string
    {
        return $this->ForbiddenPlatform ?? null;
    }

    /**
     * Set ForbiddenPlatform
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ForbiddenPlatformEnum
     *
     * @param 'SEARCH'|'NETWORK'|'NONE'|null $value
     *
     * @return $this
     */
    public function setForbiddenPlatform(?string $value)
    {
        $this->ForbiddenPlatform = $value;

        return $this;
    }

    /**
     * Get AvailableCampaignTypes
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AvailableCampaignTypeEnum
     *
     * @return list<'TEXT_CAMPAIGN'|'MOBILE_APP_CAMPAIGN'|'DYNAMIC_TEXT_CAMPAIGN'|'CPM_BANNER_CAMPAIGN'|'SMART_CAMPAIGN'|'CONTENT_PROMOTION'|'BILLING_AGGREGATE'>
     */
    public function getAvailableCampaignTypes(): array
    {
        return $this->AvailableCampaignTypes ?? [];
    }

    /**
     * Set AvailableCampaignTypes
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AvailableCampaignTypeEnum
     *
     * @param list<'TEXT_CAMPAIGN'|'MOBILE_APP_CAMPAIGN'|'DYNAMIC_TEXT_CAMPAIGN'|'CPM_BANNER_CAMPAIGN'|'SMART_CAMPAIGN'|'CONTENT_PROMOTION'|'BILLING_AGGREGATE'> $value
     *
     * @return $this
     */
    public function setAvailableCampaignTypes(array $value)
    {
        $this->AvailableCampaignTypes = $value;

        return $this;
    }

    /**
     * Get AvailableAdGroupTypes
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AvailableAdGroupTypeEnum
     *
     * @return list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'SMART_AD_GROUP'|'CONTENT_PROMOTION_AD_GROUP'>
     */
    public function getAvailableAdGroupTypes(): array
    {
        return $this->AvailableAdGroupTypes ?? [];
    }

    /**
     * Set AvailableAdGroupTypes
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AvailableAdGroupTypeEnum
     *
     * @param list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'SMART_AD_GROUP'|'CONTENT_PROMOTION_AD_GROUP'> $value
     *
     * @return $this
     */
    public function setAvailableAdGroupTypes(array $value)
    {
        $this->AvailableAdGroupTypes = $value;

        return $this;
    }
}
