<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceTargetSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $RetargetingListIds;

//    Can be omitted.
//    protected $InterestIds;

//    Can be omitted.
//    protected $States;

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
     * Get RetargetingListIds
     *
     * @return list<int>
     */
    public function getRetargetingListIds(): array
    {
        return $this->RetargetingListIds ?? [];
    }

    /**
     * Set RetargetingListIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setRetargetingListIds(array $value)
    {
        $this->RetargetingListIds = $value;

        return $this;
    }

    /**
     * Get InterestIds
     *
     * @return list<int>
     */
    public function getInterestIds(): array
    {
        return $this->InterestIds ?? [];
    }

    /**
     * Set InterestIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setInterestIds(array $value)
    {
        $this->InterestIds = $value;

        return $this;
    }

    /**
     * Get States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AudienceTargetStateEnum
     *
     * @return list<'ON'|'SUSPENDED'>
     */
    public function getStates(): array
    {
        return $this->States ?? [];
    }

    /**
     * Set States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AudienceTargetStateEnum
     *
     * @param list<'ON'|'SUSPENDED'> $value
     *
     * @return $this
     */
    public function setStates(array $value)
    {
        $this->States = $value;

        return $this;
    }
}
