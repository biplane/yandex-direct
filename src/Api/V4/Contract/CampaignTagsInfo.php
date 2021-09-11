<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets Tags.
     *
     * @return TagInfo[]|null
     */
    public function getTags(): ?array
    {
        return $this->Tags;
    }

    /**
     * Sets Tags.
     *
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
