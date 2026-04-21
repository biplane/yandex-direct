<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignsSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $Types;

//    Can be omitted.
//    protected $States;

//    Can be omitted.
//    protected $Statuses;

//    Can be omitted.
//    protected $StatusesPayment;

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
     * Get Ids
     *
     * @return list<int>
     */
    public function getIds(): array
    {
        return $this->Ids ?? [];
    }

    /**
     * Set Ids
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Get Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignTypeEnum
     *
     * @return list<'TEXT_CAMPAIGN'|'MOBILE_APP_CAMPAIGN'|'DYNAMIC_TEXT_CAMPAIGN'|'CPM_BANNER_CAMPAIGN'|'SMART_CAMPAIGN'|'UNIFIED_CAMPAIGN'>
     */
    public function getTypes(): array
    {
        return $this->Types ?? [];
    }

    /**
     * Set Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignTypeEnum
     *
     * @param list<'TEXT_CAMPAIGN'|'MOBILE_APP_CAMPAIGN'|'DYNAMIC_TEXT_CAMPAIGN'|'CPM_BANNER_CAMPAIGN'|'SMART_CAMPAIGN'|'UNIFIED_CAMPAIGN'> $value
     *
     * @return $this
     */
    public function setTypes(array $value)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Get States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStateEnum
     *
     * @return list<'ARCHIVED'|'CONVERTED'|'ENDED'|'OFF'|'ON'|'SUSPENDED'>
     */
    public function getStates(): array
    {
        return $this->States ?? [];
    }

    /**
     * Set States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStateEnum
     *
     * @param list<'ARCHIVED'|'CONVERTED'|'ENDED'|'OFF'|'ON'|'SUSPENDED'> $value
     *
     * @return $this
     */
    public function setStates(array $value)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Get Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStatusSelectionEnum
     *
     * @return list<'ACCEPTED'|'DRAFT'|'MODERATION'|'REJECTED'>
     */
    public function getStatuses(): array
    {
        return $this->Statuses ?? [];
    }

    /**
     * Set Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStatusSelectionEnum
     *
     * @param list<'ACCEPTED'|'DRAFT'|'MODERATION'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setStatuses(array $value)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Get StatusesPayment
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum
     *
     * @return list<'DISALLOWED'|'ALLOWED'>
     */
    public function getStatusesPayment(): array
    {
        return $this->StatusesPayment ?? [];
    }

    /**
     * Set StatusesPayment
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum
     *
     * @param list<'DISALLOWED'|'ALLOWED'> $value
     *
     * @return $this
     */
    public function setStatusesPayment(array $value)
    {
        $this->StatusesPayment = $value;

        return $this;
    }
}
