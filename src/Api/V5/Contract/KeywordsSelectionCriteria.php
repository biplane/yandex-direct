<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordsSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $States;

//    Can be omitted.
//    protected $Statuses;

//    Can be omitted.
//    protected $ModifiedSince;

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
     * Get States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordStateSelectionEnum
     *
     * @return list<'OFF'|'ON'|'SUSPENDED'>
     */
    public function getStates(): array
    {
        return $this->States ?? [];
    }

    /**
     * Set States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordStateSelectionEnum
     *
     * @param list<'OFF'|'ON'|'SUSPENDED'> $value
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordStatusSelectionEnum
     *
     * @return list<'DRAFT'|'ACCEPTED'|'REJECTED'>
     */
    public function getStatuses(): array
    {
        return $this->Statuses ?? [];
    }

    /**
     * Set Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\KeywordStatusSelectionEnum
     *
     * @param list<'DRAFT'|'ACCEPTED'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setStatuses(array $value)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Get ModifiedSince
     */
    public function getModifiedSince(): ?string
    {
        return $this->ModifiedSince ?? null;
    }

    /**
     * Set ModifiedSince
     *
     * @return $this
     */
    public function setModifiedSince(?string $value)
    {
        $this->ModifiedSince = $value;

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
