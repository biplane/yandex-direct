<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifiersSelectionCriteria
{

    protected $CampaignIds = null;

    protected $AdGroupIds = null;

    protected $Ids = null;

    protected $Types = null;

    protected $Levels = array(
        
    );

    /**
     * Creates a new instance of BidModifiersSelectionCriteria.
     *
     * @return BidModifiersSelectionCriteria
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
     * Gets Types.
     *
     * @return BidModifierTypeEnum[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param BidModifierTypeEnum[]|null $value
     * @return $this
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets Levels.
     *
     * @return BidModifierLevelEnum[]
     */
    public function getLevels()
    {
        return $this->Levels;
    }

    /**
     * Sets Levels.
     *
     * @param BidModifierLevelEnum[] $value
     * @return $this
     */
    public function setLevels(array $value)
    {
        $this->Levels = $value;

        return $this;
    }


}

