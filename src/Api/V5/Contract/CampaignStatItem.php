<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignStatItem
{
    protected $CampaignId = null;

    protected $BorderDate = null;

    /**
     * Creates a new instance of CampaignStatItem.
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
     * Gets BorderDate.
     */
    public function getBorderDate(): string
    {
        return $this->BorderDate;
    }

    /**
     * Sets BorderDate.
     *
     * @return $this
     */
    public function setBorderDate(string $value)
    {
        $this->BorderDate = $value;

        return $this;
    }
}
