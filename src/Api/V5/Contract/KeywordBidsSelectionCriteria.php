<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordBidsSelectionCriteria
{
//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $KeywordIds;

//    Can be omitted.
//    protected $ServingStatuses;

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
     * Get CampaignIds
     *
     * @return list<int>
     */
    public function getCampaignIds(): array
    {
        return $this->CampaignIds ?? [];
    }

    /**
     * Set CampaignIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setCampaignIds(array $value)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Get AdGroupIds
     *
     * @return list<int>
     */
    public function getAdGroupIds(): array
    {
        return $this->AdGroupIds ?? [];
    }

    /**
     * Set AdGroupIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setAdGroupIds(array $value)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Get KeywordIds
     *
     * @return list<int>
     */
    public function getKeywordIds(): array
    {
        return $this->KeywordIds ?? [];
    }

    /**
     * Set KeywordIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setKeywordIds(array $value)
    {
        $this->KeywordIds = $value;

        return $this;
    }

    /**
     * Get ServingStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @return list<'ELIGIBLE'|'RARELY_SERVED'>
     */
    public function getServingStatuses(): array
    {
        return $this->ServingStatuses ?? [];
    }

    /**
     * Set ServingStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @param list<'ELIGIBLE'|'RARELY_SERVED'> $value
     *
     * @return $this
     */
    public function setServingStatuses(array $value)
    {
        $this->ServingStatuses = $value;

        return $this;
    }
}
