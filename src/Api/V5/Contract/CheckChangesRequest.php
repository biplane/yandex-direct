<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckChangesRequest
{
//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $AdIds;

    /** @var string */
    protected $Timestamp;

    /** @var non-empty-list<'CampaignIds'|'AdGroupIds'|'AdIds'|'CampaignsStat'> */
    protected $FieldNames;

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
     * Get Timestamp
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Set Timestamp
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CheckFieldEnum
     *
     * @return non-empty-list<'CampaignIds'|'AdGroupIds'|'AdIds'|'CampaignsStat'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CheckFieldEnum
     *
     * @param non-empty-list<'CampaignIds'|'AdGroupIds'|'AdIds'|'CampaignsStat'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
