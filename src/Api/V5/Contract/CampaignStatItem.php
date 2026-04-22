<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignStatItem
{
    /** @var int */
    protected $CampaignId;

    /** @var string */
    protected $BorderDate;

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
     * Get BorderDate
     */
    public function getBorderDate(): string
    {
        return $this->BorderDate;
    }

    /**
     * Set BorderDate
     *
     * @return $this
     */
    public function setBorderDate(string $value)
    {
        $this->BorderDate = $value;

        return $this;
    }
}
