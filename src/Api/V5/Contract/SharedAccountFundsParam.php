<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SharedAccountFundsParam
{

//    Can be omit.
//    protected $Refund = null;

//    Can be omit.
//    protected $Spend = null;

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
        return isset($this->Refund) ? $this->Refund : null;
    }

    /**
     * Sets Refund.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->Spend) ? $this->Spend : null;
    }

    /**
     * Sets Spend.
     *
     * @param int|null $value
     * @return $this
     */
    public function setSpend($value = null)
    {
        $this->Spend = $value;

        return $this;
    }


}

