<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupsSelectionCriteria
{
//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $Ids = null;

//    Can be omitted.
//    protected $Types = null;

//    Can be omitted.
//    protected $Statuses = null;

//    Can be omitted.
//    protected $TagIds = null;

//    Can be omitted.
//    protected $Tags = null;

//    Can be omitted.
//    protected $AppIconStatuses = null;

//    Can be omitted.
//    protected $ServingStatuses = null;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds = null;

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
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @see AdGroupTypesEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * @see AdGroupTypesEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTypes(?array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * @see AdGroupStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * @see AdGroupStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatuses(?array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getTagIds(): ?array
    {
        return $this->TagIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setTagIds(?array $value = null)
    {
        $this->TagIds = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->Tags ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTags(?array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }

    /**
     * @see AdGroupAppIconStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getAppIconStatuses(): ?array
    {
        return $this->AppIconStatuses ?? null;
    }

    /**
     * @see AdGroupAppIconStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAppIconStatuses(?array $value = null)
    {
        $this->AppIconStatuses = $value;

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

    /**
     * @return int[]|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }
}
