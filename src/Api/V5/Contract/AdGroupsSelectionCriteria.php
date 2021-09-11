<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupsSelectionCriteria
{
//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $Types = null;

//    Can be omit.
//    protected $Statuses = null;

//    Can be omit.
//    protected $TagIds = null;

//    Can be omit.
//    protected $Tags = null;

//    Can be omit.
//    protected $AppIconStatuses = null;

//    Can be omit.
//    protected $ServingStatuses = null;

//    Can be omit.
//    protected $NegativeKeywordSharedSetIds = null;

    /**
     * Creates a new instance of AdGroupsSelectionCriteria.
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
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * Sets Ids.
     *
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
     * Gets Types.
     *
     * @see AdGroupTypesEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * Sets Types.
     *
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
     * Gets Statuses.
     *
     * @see AdGroupStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * Sets Statuses.
     *
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
     * Gets TagIds.
     *
     * @return int[]|null
     */
    public function getTagIds(): ?array
    {
        return $this->TagIds ?? null;
    }

    /**
     * Sets TagIds.
     *
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
     * Gets Tags.
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->Tags ?? null;
    }

    /**
     * Sets Tags.
     *
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
     * Gets AppIconStatuses.
     *
     * @see AdGroupAppIconStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getAppIconStatuses(): ?array
    {
        return $this->AppIconStatuses ?? null;
    }

    /**
     * Sets AppIconStatuses.
     *
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

    /**
     * Gets NegativeKeywordSharedSetIds.
     *
     * @return int[]|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Sets NegativeKeywordSharedSetIds.
     *
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
