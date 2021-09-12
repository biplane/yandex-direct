<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignBalanceInfo
{
    protected $CampaignID = null;

    protected $Sum = null;

    protected $Rest = null;

    protected $SumAvailableForTransfer = null;

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

    public function getRest(): float
    {
        return $this->Rest;
    }

    /**
     * @return $this
     */
    public function setRest(float $value)
    {
        $this->Rest = $value;

        return $this;
    }

    public function getSumAvailableForTransfer(): float
    {
        return $this->SumAvailableForTransfer;
    }

    /**
     * @return $this
     */
    public function setSumAvailableForTransfer(float $value)
    {
        $this->SumAvailableForTransfer = $value;

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
