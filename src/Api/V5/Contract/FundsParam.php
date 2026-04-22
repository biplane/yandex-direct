<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FundsParam
{
    /** @var 'CAMPAIGN_FUNDS'|'SHARED_ACCOUNT_FUNDS' */
    protected $Mode;

//    Can be omitted.
//    protected $CampaignFunds;

//    Can be omitted.
//    protected $SharedAccountFunds;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Mode
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignFundsEnum
     *
     * @return 'CAMPAIGN_FUNDS'|'SHARED_ACCOUNT_FUNDS'
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
     * Set Mode
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignFundsEnum
     *
     * @param 'CAMPAIGN_FUNDS'|'SHARED_ACCOUNT_FUNDS' $value
     *
     * @return $this
     */
    public function setMode(string $value)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Get CampaignFunds
     */
    public function getCampaignFunds(): ?CampaignFundsParam
    {
        return $this->CampaignFunds ?? null;
    }

    /**
     * Set CampaignFunds
     *
     * @return $this
     */
    public function setCampaignFunds(?CampaignFundsParam $value)
    {
        $this->CampaignFunds = $value;

        return $this;
    }

    /**
     * Get SharedAccountFunds
     */
    public function getSharedAccountFunds(): ?SharedAccountFundsParam
    {
        return $this->SharedAccountFunds ?? null;
    }

    /**
     * Set SharedAccountFunds
     *
     * @return $this
     */
    public function setSharedAccountFunds(?SharedAccountFundsParam $value)
    {
        $this->SharedAccountFunds = $value;

        return $this;
    }
}
