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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * @see CampaignChangesInEnum
     *
     * @return string[]
     */
    public function getChangesIn(): array
    {
        return $this->ChangesIn;
    }

    /**
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
