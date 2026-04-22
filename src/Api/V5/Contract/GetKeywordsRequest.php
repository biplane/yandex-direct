<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetKeywordsRequest extends GetRequestGeneral
{
    /** @var KeywordsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'Keyword'|'State'|'Status'|'AdGroupId'|'CampaignId'|'Bid'|'AutotargetingSearchBidIsAuto'|'ContextBid'|'StrategyPriority'|'UserParam1'|'UserParam2'|'Productivity'|'StatisticsSearch'|'StatisticsNetwork'|'ServingStatus'|'AutotargetingCategories'|'AutotargetingBrandOptions'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $AutotargetingSettingsCategoriesFieldNames;

//    Can be omitted.
//    protected $AutotargetingSettingsBrandOptionsFieldNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): KeywordsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(KeywordsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordFieldEnum
     *
     * @return non-empty-list<'Id'|'Keyword'|'State'|'Status'|'AdGroupId'|'CampaignId'|'Bid'|'AutotargetingSearchBidIsAuto'|'ContextBid'|'StrategyPriority'|'UserParam1'|'UserParam2'|'Productivity'|'StatisticsSearch'|'StatisticsNetwork'|'ServingStatus'|'AutotargetingCategories'|'AutotargetingBrandOptions'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordFieldEnum
     *
     * @param non-empty-list<'Id'|'Keyword'|'State'|'Status'|'AdGroupId'|'CampaignId'|'Bid'|'AutotargetingSearchBidIsAuto'|'ContextBid'|'StrategyPriority'|'UserParam1'|'UserParam2'|'Productivity'|'StatisticsSearch'|'StatisticsNetwork'|'ServingStatus'|'AutotargetingCategories'|'AutotargetingBrandOptions'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettingsCategoriesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesFieldEnum
     *
     * @return list<'Exact'|'Narrow'|'Alternative'|'Accessory'|'Broader'>
     */
    public function getAutotargetingSettingsCategoriesFieldNames(): array
    {
        return $this->AutotargetingSettingsCategoriesFieldNames ?? [];
    }

    /**
     * Set AutotargetingSettingsCategoriesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesFieldEnum
     *
     * @param list<'Exact'|'Narrow'|'Alternative'|'Accessory'|'Broader'> $value
     *
     * @return $this
     */
    public function setAutotargetingSettingsCategoriesFieldNames(array $value)
    {
        $this->AutotargetingSettingsCategoriesFieldNames = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettingsBrandOptionsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsFieldEnum
     *
     * @return list<'WithoutBrands'|'WithAdvertiserBrand'|'WithCompetitorsBrand'>
     */
    public function getAutotargetingSettingsBrandOptionsFieldNames(): array
    {
        return $this->AutotargetingSettingsBrandOptionsFieldNames ?? [];
    }

    /**
     * Set AutotargetingSettingsBrandOptionsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsFieldEnum
     *
     * @param list<'WithoutBrands'|'WithAdvertiserBrand'|'WithCompetitorsBrand'> $value
     *
     * @return $this
     */
    public function setAutotargetingSettingsBrandOptionsFieldNames(array $value)
    {
        $this->AutotargetingSettingsBrandOptionsFieldNames = $value;

        return $this;
    }
}
