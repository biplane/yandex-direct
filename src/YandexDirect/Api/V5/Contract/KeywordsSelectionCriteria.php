<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordsSelectionCriteria
{

    protected $Ids = null;

    protected $AdGroupIds = null;

    protected $CampaignIds = null;

    protected $States = null;

    protected $Statuses = null;

    /**
     * Creates a new instance of KeywordsSelectionCriteria.
     *
     * @return KeywordsSelectionCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->Ids;
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
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setAdGroupIds(array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
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
     * Gets States.
     *
     * @return StateEnum[]|null
     */
    public function getStates()
    {
        return $this->States;
    }

    /**
     * Sets States.
     *
     * @param StateEnum[]|null $value
     * @return $this
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

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


}

