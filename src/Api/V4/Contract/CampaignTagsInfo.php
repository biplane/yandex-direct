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
    protected $CampaignID = null;

    protected $Tags = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * @return TagInfo[]|null
     */
    public function getTags(): ?array
    {
        return $this->Tags;
    }

    /**
     * @param TagInfo[]|null $value
     *
     * @return $this
     */
    public function setTags(?array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }
}
