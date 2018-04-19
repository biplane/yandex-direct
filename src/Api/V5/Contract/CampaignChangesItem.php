<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignChangesItem
{

    protected $CampaignId = null;

    protected $ChangesIn = [];

    /**
     * Creates a new instance of CampaignChangesItem.
     *
     * @return self
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
     * @return string[]
     * @see CampaignChangesInEnum
     */
    public function getChangesIn()
    {
        return $this->ChangesIn;
    }

    /**
     * Sets ChangesIn.
     *
     * @param string[] $value
     * @return $this
     * @see CampaignChangesInEnum
     */
    public function setChangesIn(array $value)
    {
        $this->ChangesIn = $value;

        return $this;
    }


}

