<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PayCampElement
{
    protected $CampaignID = null;

    protected $Sum = null;

    protected $Currency = null;

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

    public function getSum(): float
    {
        return $this->Sum;
    }

    /**
     * @return $this
     */
    public function setSum(float $value)
    {
        $this->Sum = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
