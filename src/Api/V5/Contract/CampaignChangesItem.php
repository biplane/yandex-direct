<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignChangesItem
{
    /** @var int */
    protected $CampaignId;

    /** @var non-empty-list<'SELF'|'CHILDREN'|'STAT'> */
    protected $ChangesIn;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get CampaignId
     */
    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get ChangesIn
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignChangesInEnum
     *
     * @return non-empty-list<'SELF'|'CHILDREN'|'STAT'>
     */
    public function getChangesIn(): array
    {
        return $this->ChangesIn;
    }

    /**
     * Set ChangesIn
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignChangesInEnum
     *
     * @param non-empty-list<'SELF'|'CHILDREN'|'STAT'> $value
     *
     * @return $this
     */
    public function setChangesIn(array $value)
    {
        $this->ChangesIn = $value;

        return $this;
    }
}
