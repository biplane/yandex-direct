<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdTargetsSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $States = null;

    /**
     * Creates a new instance of AdTargetsSelectionCriteria.
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
     * @see AdTargetStateSelectionEnum
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
     * @see AdTargetStateSelectionEnum
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }


}

