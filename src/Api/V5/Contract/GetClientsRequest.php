<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetClientsRequest
{
    /** @var non-empty-list<'AccountQuality'|'Archived'|'ClientId'|'ClientInfo'|'CountryId'|'CreatedAt'|'Currency'|'Grants'|'Bonuses'|'Login'|'Notification'|'OverdraftSumAvailable'|'Phone'|'Representatives'|'Restrictions'|'Settings'|'Type'|'VatRate'|'ForbiddenPlatform'|'AvailableCampaignTypes'|'AvailableAdGroupTypes'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $TinInfoFieldNames;

//    Can be omitted.
//    protected $OrganizationFieldNames;

//    Can be omitted.
//    protected $ContractFieldNames;

//    Can be omitted.
//    protected $ContragentFieldNames;

//    Can be omitted.
//    protected $ContragentTinInfoFieldNames;

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
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ClientFieldEnum
     *
     * @return non-empty-list<'AccountQuality'|'Archived'|'ClientId'|'ClientInfo'|'CountryId'|'CreatedAt'|'Currency'|'Grants'|'Bonuses'|'Login'|'Notification'|'OverdraftSumAvailable'|'Phone'|'Representatives'|'Restrictions'|'Settings'|'Type'|'VatRate'|'ForbiddenPlatform'|'AvailableCampaignTypes'|'AvailableAdGroupTypes'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ClientFieldEnum
     *
     * @param non-empty-list<'AccountQuality'|'Archived'|'ClientId'|'ClientInfo'|'CountryId'|'CreatedAt'|'Currency'|'Grants'|'Bonuses'|'Login'|'Notification'|'OverdraftSumAvailable'|'Phone'|'Representatives'|'Restrictions'|'Settings'|'Type'|'VatRate'|'ForbiddenPlatform'|'AvailableCampaignTypes'|'AvailableAdGroupTypes'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get TinInfoFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TinInfoFieldEnum
     *
     * @return list<'TinType'|'Tin'>
     */
    public function getTinInfoFieldNames(): array
    {
        return $this->TinInfoFieldNames ?? [];
    }

    /**
     * Set TinInfoFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TinInfoFieldEnum
     *
     * @param list<'TinType'|'Tin'> $value
     *
     * @return $this
     */
    public function setTinInfoFieldNames(array $value)
    {
        $this->TinInfoFieldNames = $value;

        return $this;
    }

    /**
     * Get OrganizationFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\OrgInfoFieldEnum
     *
     * @return list<'Name'|'EpayNumber'|'RegNumber'|'OksmNumber'|'OkvedCode'>
     */
    public function getOrganizationFieldNames(): array
    {
        return $this->OrganizationFieldNames ?? [];
    }

    /**
     * Set OrganizationFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\OrgInfoFieldEnum
     *
     * @param list<'Name'|'EpayNumber'|'RegNumber'|'OksmNumber'|'OkvedCode'> $value
     *
     * @return $this
     */
    public function setOrganizationFieldNames(array $value)
    {
        $this->OrganizationFieldNames = $value;

        return $this;
    }

    /**
     * Get ContractFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractInfoFieldEnum
     *
     * @return list<'Number'|'Date'|'Price'|'Type'|'ActionType'|'SubjectType'|'IsAgencyPayment'>
     */
    public function getContractFieldNames(): array
    {
        return $this->ContractFieldNames ?? [];
    }

    /**
     * Set ContractFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractInfoFieldEnum
     *
     * @param list<'Number'|'Date'|'Price'|'Type'|'ActionType'|'SubjectType'|'IsAgencyPayment'> $value
     *
     * @return $this
     */
    public function setContractFieldNames(array $value)
    {
        $this->ContractFieldNames = $value;

        return $this;
    }

    /**
     * Get ContragentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContragentInfoFieldEnum
     *
     * @return list<'Name'|'Phone'|'EpayNumber'|'RegNumber'|'OksmNumber'>
     */
    public function getContragentFieldNames(): array
    {
        return $this->ContragentFieldNames ?? [];
    }

    /**
     * Set ContragentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContragentInfoFieldEnum
     *
     * @param list<'Name'|'Phone'|'EpayNumber'|'RegNumber'|'OksmNumber'> $value
     *
     * @return $this
     */
    public function setContragentFieldNames(array $value)
    {
        $this->ContragentFieldNames = $value;

        return $this;
    }

    /**
     * Get ContragentTinInfoFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TinInfoFieldEnum
     *
     * @return list<'TinType'|'Tin'>
     */
    public function getContragentTinInfoFieldNames(): array
    {
        return $this->ContragentTinInfoFieldNames ?? [];
    }

    /**
     * Set ContragentTinInfoFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TinInfoFieldEnum
     *
     * @param list<'TinType'|'Tin'> $value
     *
     * @return $this
     */
    public function setContragentTinInfoFieldNames(array $value)
    {
        $this->ContragentTinInfoFieldNames = $value;

        return $this;
    }
}
