<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordsSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $States = null;

//    Can be omit.
//    protected $Statuses = null;

//    Can be omit.
//    protected $ModifiedSince = null;

//    Can be omit.
//    protected $ServingStatuses = null;

    /**
     * Creates a new instance of KeywordsSelectionCriteria.
     *
     * @return self
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
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return isset($this->AdGroupIds) ? $this->AdGroupIds : null;
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
     * Gets States.
     *
     * @return string[]|null
     * @see KeywordStateSelectionEnum
     */
    public function getStates()
    {
        return isset($this->States) ? $this->States : null;
    }

    /**
     * Sets States.
     *
     * @param string[]|null $value
     * @return $this
     * @see KeywordStateSelectionEnum
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return string[]|null
     * @see KeywordStatusSelectionEnum
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
     * @see KeywordStatusSelectionEnum
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets ModifiedSince.
     *
     * @return string|null
     */
    public function getModifiedSince()
    {
        return isset($this->ModifiedSince) ? $this->ModifiedSince : null;
    }

    /**
     * Sets ModifiedSince.
     *
     * @param string|null $value
     * @return $this
     */
    public function setModifiedSince($value = null)
    {
        $this->ModifiedSince = $value;

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

