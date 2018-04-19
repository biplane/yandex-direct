<?php

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

    /**
     * Creates a new instance of AdGroupsSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return isset($this->CampaignIds) ? $this->CampaignIds : null;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return isset($this->Ids) ? $this->Ids : null;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return string[]|null
     * @see AdGroupTypesEnum
     */
    public function getTypes()
    {
        return isset($this->Types) ? $this->Types : null;
    }

    /**
     * Sets Types.
     *
     * @param string[]|null $value
     * @return $this
     * @see AdGroupTypesEnum
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return string[]|null
     * @see AdGroupStatusSelectionEnum
     */
    public function getStatuses()
    {
        return isset($this->Statuses) ? $this->Statuses : null;
    }

    /**
     * Sets Statuses.
     *
     * @param string[]|null $value
     * @return $this
     * @see AdGroupStatusSelectionEnum
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets TagIds.
     *
     * @return int[]|null
     */
    public function getTagIds()
    {
        return isset($this->TagIds) ? $this->TagIds : null;
    }

    /**
     * Sets TagIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setTagIds(array $value = null)
    {
        $this->TagIds = $value;

        return $this;
    }

    /**
     * Gets Tags.
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return isset($this->Tags) ? $this->Tags : null;
    }

    /**
     * Sets Tags.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setTags(array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }

    /**
     * Gets AppIconStatuses.
     *
     * @return string[]|null
     * @see AdGroupAppIconStatusSelectionEnum
     */
    public function getAppIconStatuses()
    {
        return isset($this->AppIconStatuses) ? $this->AppIconStatuses : null;
    }

    /**
     * Sets AppIconStatuses.
     *
     * @param string[]|null $value
     * @return $this
     * @see AdGroupAppIconStatusSelectionEnum
     */
    public function setAppIconStatuses(array $value = null)
    {
        $this->AppIconStatuses = $value;

        return $this;
    }

    /**
     * Gets ServingStatuses.
     *
     * @return string[]|null
     * @see ServingStatusEnum
     */
    public function getServingStatuses()
    {
        return isset($this->ServingStatuses) ? $this->ServingStatuses : null;
    }

    /**
     * Sets ServingStatuses.
     *
     * @param string[]|null $value
     * @return $this
     * @see ServingStatusEnum
     */
    public function setServingStatuses(array $value = null)
    {
        $this->ServingStatuses = $value;

        return $this;
    }


}

