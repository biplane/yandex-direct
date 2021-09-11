<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidsSelectionCriteria
{
//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $KeywordIds = null;

//    Can be omit.
//    protected $ServingStatuses = null;

    /**
     * Creates a new instance of KeywordBidsSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdGroupIds(?array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets KeywordIds.
     *
     * @return int[]|null
     */
    public function getKeywordIds(): ?array
    {
        return $this->KeywordIds ?? null;
    }

    /**
     * Sets KeywordIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setKeywordIds(?array $value = null)
    {
        $this->KeywordIds = $value;

        return $this;
    }

    /**
     * Gets ServingStatuses.
     *
     * @see ServingStatusEnum
     *
     * @return string[]|null
     */
    public function getServingStatuses(): ?array
    {
        return $this->ServingStatuses ?? null;
    }

    /**
     * Sets ServingStatuses.
     *
     * @see ServingStatusEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setServingStatuses(?array $value = null)
    {
        $this->ServingStatuses = $value;

        return $this;
    }
}
