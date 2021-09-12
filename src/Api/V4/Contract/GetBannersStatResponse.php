<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetBannersStatResponse
{
    protected $CampaignID = null;

    protected $StartDate = null;

    protected $EndDate = null;

    protected $Stat = null;

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

    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * @return BannersStatItem[]|null
     */
    public function getStat(): ?array
    {
        return $this->Stat;
    }

    /**
     * @param BannersStatItem[]|null $value
     *
     * @return $this
     */
    public function setStat(?array $value = null)
    {
        $this->Stat = $value;

        return $this;
    }
}
