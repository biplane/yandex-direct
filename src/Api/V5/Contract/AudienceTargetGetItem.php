<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetGetItem extends AudienceTargetBase
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $RetargetingListId = null;

//    Can be omit.
//    protected $InterestId = null;

//    Can be omit.
//    protected $State = null;

    /**
     * Creates a new instance of AudienceTargetGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return isset($this->CampaignId) ? $this->CampaignId : null;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets RetargetingListId.
     *
     * @return int|null
     */
    public function getRetargetingListId()
    {
        return isset($this->RetargetingListId) ? $this->RetargetingListId : null;
    }

    /**
     * Sets RetargetingListId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setRetargetingListId($value = null)
    {
        $this->RetargetingListId = $value;

        return $this;
    }

    /**
     * Gets InterestId.
     *
     * @return int|null
     */
    public function getInterestId()
    {
        return isset($this->InterestId) ? $this->InterestId : null;
    }

    /**
     * Sets InterestId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setInterestId($value = null)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return string|null
     * @see StateEnum
     */
    public function getState()
    {
        return isset($this->State) ? $this->State : null;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return $this
     * @see StateEnum
     */
    public function setState($value = null)
    {
        $this->State = $value;

        return $this;
    }


}

