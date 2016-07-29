<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FundsParam
{

    protected $Mode = null;

    protected $CampaignFunds = null;

    protected $SharedAccountFunds = null;

    /**
     * Creates a new instance of FundsParam.
     *
     * @return FundsParam
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Mode.
     *
     * @return CampaignFundsEnum
     */
    public function getMode()
    {
        return $this->Mode;
    }

    /**
     * Sets Mode.
     *
     * @param CampaignFundsEnum $value
     * @return $this
     */
    public function setMode($value)
    {
        $this->Mode = $value;

        return $this;
    }

    /**
     * Gets CampaignFunds.
     *
     * @return CampaignFundsParam|null
     */
    public function getCampaignFunds()
    {
        return $this->CampaignFunds;
    }

    /**
     * Sets CampaignFunds.
     *
     * @param CampaignFundsParam|null $value
     * @return $this
     */
    public function setCampaignFunds(CampaignFundsParam $value = null)
    {
        $this->CampaignFunds = $value;

        return $this;
    }

    /**
     * Gets SharedAccountFunds.
     *
     * @return SharedAccountFundsParam|null
     */
    public function getSharedAccountFunds()
    {
        return $this->SharedAccountFunds;
    }

    /**
     * Sets SharedAccountFunds.
     *
     * @param SharedAccountFundsParam|null $value
     * @return $this
     */
    public function setSharedAccountFunds(SharedAccountFundsParam $value = null)
    {
        $this->SharedAccountFunds = $value;

        return $this;
    }


}

