<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignSetting
{
    /** @var 'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_SITE_MONITORING'|'REQUIRE_SERVICING'|'ENABLE_COMPANY_INFO'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'|'ALTERNATIVE_TEXTS_ENABLED' */
    protected $Option;

    /** @var 'YES'|'NO' */
    protected $Value;

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
     * Get Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSettingsEnum
     *
     * @return 'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_SITE_MONITORING'|'REQUIRE_SERVICING'|'ENABLE_COMPANY_INFO'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'|'ALTERNATIVE_TEXTS_ENABLED'
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * Set Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSettingsEnum
     *
     * @param 'ADD_METRICA_TAG'|'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_SITE_MONITORING'|'REQUIRE_SERVICING'|'ENABLE_COMPANY_INFO'|'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED'|'ALTERNATIVE_TEXTS_ENABLED' $value
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
