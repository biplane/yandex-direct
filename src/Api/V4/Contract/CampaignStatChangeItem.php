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
