<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignSettingGet
{
    /** @var 'ADD_OPENSTAT_TAG'|'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'ENABLE_SITE_MONITORING'|'ENABLE_BEHAVIORAL_TARGETING'|'REQUIRE_SERVICING'|'ENABLE_EXTENDED_AD_TITLE'|'ENABLE_COMPANY_INFO'|'SHARED_ACCOUNT_ENABLED'|'DAILY_BUDGET_ALLOWED'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED' */
    protected $Option;

    /** @var 'YES'|'NO' */
    protected $Value;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsGetEnum
     *
     * @return 'ADD_OPENSTAT_TAG'|'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'ENABLE_SITE_MONITORING'|'ENABLE_BEHAVIORAL_TARGETING'|'REQUIRE_SERVICING'|'ENABLE_EXTENDED_AD_TITLE'|'ENABLE_COMPANY_INFO'|'SHARED_ACCOUNT_ENABLED'|'DAILY_BUDGET_ALLOWED'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * Set Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsGetEnum
     *
     * @param 'ADD_OPENSTAT_TAG'|'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'ENABLE_SITE_MONITORING'|'ENABLE_BEHAVIORAL_TARGETING'|'REQUIRE_SERVICING'|'ENABLE_EXTENDED_AD_TITLE'|'ENABLE_COMPANY_INFO'|'SHARED_ACCOUNT_ENABLED'|'DAILY_BUDGET_ALLOWED'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED' $value
     *
     * @return $this
     */
    public function setOption(string $value)
    {
        $this->Option = $value;

        return $this;
    }

    /**
     * Get Value
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Set Value
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
