<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupsSelectionCriteria
{

    protected $CampaignIds = null;

    protected $Ids = null;

    protected $Statuses = null;

    protected $TagIds = null;

    protected $Tags = null;

    /**
     * Creates a new instance of AdGroupsSelectionCriteria.
     *
     * @return AdGroupsSelectionCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return long[]|null
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * Sets CampaignIds.
     *
     * @param long[]|null $value
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
     * @return long[]|null
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return StatusEnum[]|null
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param StatusEnum[]|null $value
     * @return $this
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets TagIds.
     *
     * @return long[]|null
     */
    public function getTagIds()
    {
        return $this->TagIds;
    }

    /**
     * Sets TagIds.
     *
     * @param long[]|null $value
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
        return $this->Tags;
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


}

