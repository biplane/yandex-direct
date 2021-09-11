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
     * Creates a new instance of GetBannersStatResponse.
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
     * Gets StartDate.
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets Stat.
     *
     * @return BannersStatItem[]|null
     */
    public function getStat(): ?array
    {
        return $this->Stat;
    }

    /**
     * Sets Stat.
     *
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
