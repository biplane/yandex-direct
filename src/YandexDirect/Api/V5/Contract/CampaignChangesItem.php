<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignChangesItem
{

    protected $CampaignId = null;

    protected $ChangesIn = array(
        
    );

    /**
     * Creates a new instance of CampaignChangesItem.
     *
     * @return CampaignChangesItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignId($value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets ChangesIn.
     *
     * @return CampaignChangesInEnum[]
     */
    public function getChangesIn()
    {
        return $this->ChangesIn;
    }

    /**
     * Sets ChangesIn.
     *
     * @param CampaignChangesInEnum[] $value
     * @return $this
     */
    public function setChangesIn(array $value)
    {
        $this->ChangesIn = $value;

        return $this;
    }


}

