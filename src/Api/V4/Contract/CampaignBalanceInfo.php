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
     * Creates a new instance of CampaignBalanceInfo.
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
     * Gets Rest.
     */
    public function getRest(): float
    {
        return $this->Rest;
    }

    /**
     * Sets Rest.
     *
     * @return $this
     */
    public function setRest(float $value)
    {
        $this->Rest = $value;

        return $this;
    }

    /**
     * Gets SumAvailableForTransfer.
     */
    public function getSumAvailableForTransfer(): float
    {
        return $this->SumAvailableForTransfer;
    }

    /**
     * Sets SumAvailableForTransfer.
     *
     * @return $this
     */
    public function setSumAvailableForTransfer(float $value)
    {
        $this->SumAvailableForTransfer = $value;

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
