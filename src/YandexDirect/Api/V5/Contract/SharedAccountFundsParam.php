<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SharedAccountFundsParam
{

    protected $Refund = null;

    protected $Spend = null;

    /**
     * Creates a new instance of SharedAccountFundsParam.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Refund.
     *
     * @return int|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }

    /**
     * Sets Refund.
     *
     * @param int|null $value
     * @return self
     */
    public function setRefund($value = null)
    {
        $this->Refund = $value;

        return $this;
    }

    /**
     * Gets Spend.
     *
     * @return int|null
     */
    public function getSpend()
    {
        return $this->Spend;
    }

    /**
     * Sets Spend.
     *
     * @param int|null $value
     * @return self
     */
    public function setSpend($value = null)
    {
        $this->Spend = $value;

        return $this;
    }


}

