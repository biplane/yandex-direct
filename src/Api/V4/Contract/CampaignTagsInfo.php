<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignTagsInfo
{
    /** @var int */
    protected $CampaignID;

//    Can be omitted.
//    protected $Tags;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get CampaignID
     */
    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * Set CampaignID
     *
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Get Tags
     *
     * @return list<TagInfo>|null
     */
    public function getTags(): ?array
    {
        return $this->Tags ?? null;
    }

    /**
     * Set Tags
     *
     * @param list<TagInfo>|null $value
     *
     * @return $this
     */
    public function setTags(?array $value)
    {
        $this->Tags = $value;

        return $this;
    }
}
