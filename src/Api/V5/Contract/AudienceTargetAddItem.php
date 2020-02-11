<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetAddItem extends AudienceTargetBase
{

    protected $AdGroupId = null;

//    Can be omit.
//    protected $RetargetingListId = null;

//    Can be omit.
//    protected $InterestId = null;

    /**
     * Creates a new instance of AudienceTargetAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdGroupId.
     *
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int $value
     * @return $this
     */
    public function setAdGroupId($value)
    {
        $this->AdGroupId = $value;

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


}

