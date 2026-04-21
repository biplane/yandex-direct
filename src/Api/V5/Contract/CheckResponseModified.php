<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckResponseModified
{
//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $AdIds;

//    Can be omitted.
//    protected $CampaignsStat;

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
     * Get AdIds
     *
     * @return list<int>
     */
    public function getAdIds(): array
    {
        return $this->AdIds ?? [];
    }

    /**
     * Set AdIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setAdIds(array $value)
    {
        $this->AdIds = $value;

        return $this;
    }

    /**
     * Get CampaignsStat
     *
     * @return list<CampaignStatItem>
     */
    public function getCampaignsStat(): array
    {
        return $this->CampaignsStat ?? [];
    }

    /**
     * Set CampaignsStat
     *
     * @param list<CampaignStatItem> $value
     *
     * @return $this
     */
    public function setCampaignsStat(array $value)
    {
        $this->CampaignsStat = $value;

        return $this;
    }
}
