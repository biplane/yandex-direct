<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PayCampElement
{
    protected $CampaignID = null;

    protected $Sum = null;

    protected $Currency = null;

    /**
     * Creates a new instance of PayCampElement.
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
     * Gets Sum.
     */
    public function getSum(): float
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @return $this
     */
    public function setSum(float $value)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
