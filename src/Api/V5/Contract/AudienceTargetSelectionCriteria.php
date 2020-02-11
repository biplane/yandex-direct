<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $RetargetingListIds = null;

//    Can be omit.
//    protected $InterestIds = null;

//    Can be omit.
//    protected $States = null;

    /**
     * Creates a new instance of AudienceTargetSelectionCriteria.
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
     * Gets RetargetingListIds.
     *
     * @return int[]|null
     */
    public function getRetargetingListIds()
    {
        return isset($this->RetargetingListIds) ? $this->RetargetingListIds : null;
    }

    /**
     * Sets RetargetingListIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setRetargetingListIds(array $value = null)
    {
        $this->RetargetingListIds = $value;

        return $this;
    }

    /**
     * Gets InterestIds.
     *
     * @return int[]|null
     */
    public function getInterestIds()
    {
        return isset($this->InterestIds) ? $this->InterestIds : null;
    }

    /**
     * Sets InterestIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setInterestIds(array $value = null)
    {
        $this->InterestIds = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return string[]|null
     * @see AudienceTargetStateEnum
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
     * @see AudienceTargetStateEnum
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }


}

