<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidsSelectionCriteria
{
//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $AdGroupIds = null;

//    Can be omitted.
//    protected $KeywordIds = null;

//    Can be omitted.
//    protected $ServingStatuses = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
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
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
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
     * @return int[]|null
     */
    public function getKeywordIds(): ?array
    {
        return $this->KeywordIds ?? null;
    }

    /**
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
     * @see ServingStatusEnum
     *
     * @return string[]|null
     */
    public function getServingStatuses(): ?array
    {
        return $this->ServingStatuses ?? null;
    }

    /**
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
