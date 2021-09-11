<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FundsParam
{
    protected $Mode = null;

//    Can be omit.
//    protected $CampaignFunds = null;

//    Can be omit.
//    protected $SharedAccountFunds = null;

    /**
     * Creates a new instance of FundsParam.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Mode.
     *
     * @see CampaignFundsEnum
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @see CampaignFundsEnum
     *
     * @return $this
     */
    public function setMode(string $value)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Gets CampaignFunds.
     */
    public function getCampaignFunds(): ?CampaignFundsParam
    {
        return $this->CampaignFunds ?? null;
    }

    /**
     * Sets CampaignFunds.
     *
     * @return $this
     */
    public function setCampaignFunds(?CampaignFundsParam $value = null)
    {
        $this->CampaignFunds = $value;

        return $this;
    }

    /**
     * Gets SharedAccountFunds.
     */
    public function getSharedAccountFunds(): ?SharedAccountFundsParam
    {
        return $this->SharedAccountFunds ?? null;
    }

    /**
     * Sets SharedAccountFunds.
     *
     * @return $this
     */
    public function setSharedAccountFunds(?SharedAccountFundsParam $value = null)
    {
        $this->SharedAccountFunds = $value;

        return $this;
    }
}
