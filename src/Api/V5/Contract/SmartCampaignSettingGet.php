<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignSettingGet
{
    /** @var 'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'REQUIRE_SERVICING'|'SHARED_ACCOUNT_ENABLED'|'DAILY_BUDGET_ALLOWED' */
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSettingsGetEnum
     *
     * @return 'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'REQUIRE_SERVICING'|'SHARED_ACCOUNT_ENABLED'|'DAILY_BUDGET_ALLOWED'
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * Set Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSettingsGetEnum
     *
     * @param 'ADD_TO_FAVORITES'|'ENABLE_AREA_OF_INTEREST_TARGETING'|'ENABLE_CURRENT_AREA_TARGETING'|'ENABLE_REGULAR_AREA_TARGETING'|'REQUIRE_SERVICING'|'SHARED_ACCOUNT_ENABLED'|'DAILY_BUDGET_ALLOWED' $value
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
