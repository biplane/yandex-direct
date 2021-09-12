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

    public function getBorderDate(): string
    {
        return $this->BorderDate;
    }

    /**
     * @return $this
     */
    public function setBorderDate(string $value)
    {
        $this->BorderDate = $value;

        return $this;
    }
}
