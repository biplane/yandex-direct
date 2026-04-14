<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientRestrictionItem
{
    /** @var 'ADGROUPS_TOTAL_PER_CAMPAIGN'|'ADS_TOTAL_PER_ADGROUP'|'API_POINTS'|'CAMPAIGNS_TOTAL_PER_CLIENT'|'CAMPAIGNS_UNARCHIVED_PER_CLIENT'|'FORECAST_REPORTS_TOTAL_IN_QUEUE'|'KEYWORDS_TOTAL_PER_ADGROUP'|'STAT_REPORTS_TOTAL_IN_QUEUE'|'WORDSTAT_REPORTS_TOTAL_IN_QUEUE'|'AD_EXTENSIONS_TOTAL'|'GENERAL_DOMAIN_BLACKLIST_SIZE'|'VIDEO_DOMAIN_BLACKLIST_SIZE' */
    protected $Element;

    /** @var int */
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
     * Get Element
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionEnum
     *
     * @return 'ADGROUPS_TOTAL_PER_CAMPAIGN'|'ADS_TOTAL_PER_ADGROUP'|'API_POINTS'|'CAMPAIGNS_TOTAL_PER_CLIENT'|'CAMPAIGNS_UNARCHIVED_PER_CLIENT'|'FORECAST_REPORTS_TOTAL_IN_QUEUE'|'KEYWORDS_TOTAL_PER_ADGROUP'|'STAT_REPORTS_TOTAL_IN_QUEUE'|'WORDSTAT_REPORTS_TOTAL_IN_QUEUE'|'AD_EXTENSIONS_TOTAL'|'GENERAL_DOMAIN_BLACKLIST_SIZE'|'VIDEO_DOMAIN_BLACKLIST_SIZE'
     */
    public function getElement(): string
    {
        return $this->Element;
    }

    /**
     * Set Element
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionEnum
     *
     * @param 'ADGROUPS_TOTAL_PER_CAMPAIGN'|'ADS_TOTAL_PER_ADGROUP'|'API_POINTS'|'CAMPAIGNS_TOTAL_PER_CLIENT'|'CAMPAIGNS_UNARCHIVED_PER_CLIENT'|'FORECAST_REPORTS_TOTAL_IN_QUEUE'|'KEYWORDS_TOTAL_PER_ADGROUP'|'STAT_REPORTS_TOTAL_IN_QUEUE'|'WORDSTAT_REPORTS_TOTAL_IN_QUEUE'|'AD_EXTENSIONS_TOTAL'|'GENERAL_DOMAIN_BLACKLIST_SIZE'|'VIDEO_DOMAIN_BLACKLIST_SIZE' $value
     *
     * @return $this
     */
    public function setElement(string $value)
    {
        $this->Element = $value;

        return $this;
    }

    /**
     * Get Value
     */
    public function getValue(): int
    {
        return $this->Value;
    }

    /**
     * Set Value
     *
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->Value = $value;

        return $this;
    }
}
