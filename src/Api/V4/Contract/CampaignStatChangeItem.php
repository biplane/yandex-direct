<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignStatChangeItem
{
    protected $CampaignID = null;

    protected $BorderDate = null;

    /**
     * Creates a new instance of CampaignStatChangeItem.
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
