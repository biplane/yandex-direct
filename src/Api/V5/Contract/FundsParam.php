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
    protected $Mode = null;

//    Can be omitted.
//    protected $CampaignFunds = null;

//    Can be omitted.
//    protected $SharedAccountFunds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see CampaignFundsEnum
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
     * @see CampaignFundsEnum
     *
     * @return $this
     */
    public function setMode(string $value)
    {
        $this->Mode = $value;

        return $this;
    }

    public function getCampaignFunds(): ?CampaignFundsParam
    {
        return $this->CampaignFunds ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignFunds(?CampaignFundsParam $value = null)
    {
        $this->CampaignFunds = $value;

        return $this;
    }

    public function getSharedAccountFunds(): ?SharedAccountFundsParam
    {
        return $this->SharedAccountFunds ?? null;
    }

    /**
     * @return $this
     */
    public function setSharedAccountFunds(?SharedAccountFundsParam $value = null)
    {
        $this->SharedAccountFunds = $value;

        return $this;
    }
}
