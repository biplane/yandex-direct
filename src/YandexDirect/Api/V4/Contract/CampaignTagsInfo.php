<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignTagsInfo
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var TagInfo[]
     */
    protected $Tags;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return CampaignTagsInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the Tags.
     *
     * @return TagInfo[]
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Sets the Tags.
     *
     * @param TagInfo[] $Tags
     *
     * @return CampaignTagsInfo
     */
    public function setTags(array $Tags)
    {
        $this->Tags = $Tags;

        return $this;
    }
}