<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignTagsInfo
{

    protected $CampaignID = null;

    protected $Tags = null;

    /**
     * Creates a new instance of CampaignTagsInfo.
     *
     * @return CampaignTagsInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets Tags.
     *
     * @return TagInfo[]|null
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Sets Tags.
     *
     * @param TagInfo[]|null $value
     * @return $this
     */
    public function setTags(array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }


}

