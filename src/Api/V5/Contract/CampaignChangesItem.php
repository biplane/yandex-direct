<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets ChangesIn.
     *
     * @see CampaignChangesInEnum
     *
     * @return string[]
     */
    public function getChangesIn(): array
    {
        return $this->ChangesIn;
    }

    /**
     * Sets ChangesIn.
     *
     * @see CampaignChangesInEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setChangesIn(array $value)
    {
        $this->ChangesIn = $value;

        return $this;
    }
}
