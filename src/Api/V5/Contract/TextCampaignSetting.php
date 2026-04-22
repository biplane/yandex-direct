<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignSetting
{
    /** @var 'EXCLUDE_PAUSED_COMPETING_ADS'|'ADD_OPENSTAT_TAG'|'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'ENABLE_SITE_MONITORING'|'ENABLE_BEHAVIORAL_TARGETING'|'ENABLE_AUTOFOCUS'|'REQUIRE_SERVICING'|'ENABLE_RELATED_KEYWORDS'|'ENABLE_EXTENDED_AD_TITLE'|'MAINTAIN_NETWORK_CPC'|'ENABLE_COMPANY_INFO'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'|'ALTERNATIVE_TEXTS_ENABLED' */
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsEnum
     *
     * @return 'EXCLUDE_PAUSED_COMPETING_ADS'|'ADD_OPENSTAT_TAG'|'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'ENABLE_SITE_MONITORING'|'ENABLE_BEHAVIORAL_TARGETING'|'ENABLE_AUTOFOCUS'|'REQUIRE_SERVICING'|'ENABLE_RELATED_KEYWORDS'|'ENABLE_EXTENDED_AD_TITLE'|'MAINTAIN_NETWORK_CPC'|'ENABLE_COMPANY_INFO'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'|'ALTERNATIVE_TEXTS_ENABLED'
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * Set Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsEnum
     *
     * @param 'EXCLUDE_PAUSED_COMPETING_ADS'|'ADD_OPENSTAT_TAG'|'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'ENABLE_SITE_MONITORING'|'ENABLE_BEHAVIORAL_TARGETING'|'ENABLE_AUTOFOCUS'|'REQUIRE_SERVICING'|'ENABLE_RELATED_KEYWORDS'|'ENABLE_EXTENDED_AD_TITLE'|'MAINTAIN_NETWORK_CPC'|'ENABLE_COMPANY_INFO'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'|'ALTERNATIVE_TEXTS_ENABLED' $value
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
