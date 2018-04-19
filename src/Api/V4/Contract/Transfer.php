<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Transfer
{

    protected $FromAccountID = null;

    protected $ToAccountID = null;

    protected $Amount = null;

    protected $Currency = null;

    /**
     * Creates a new instance of Transfer.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FromAccountID.
     *
     * @return int
     */
    public function getFromAccountID()
    {
        return $this->FromAccountID;
    }

    /**
     * Sets FromAccountID.
     *
     * @param int $value
     * @return $this
     */
    public function setFromAccountID($value)
    {
        $this->FromAccountID = $value;

        return $this;
    }

    /**
     * Gets ToAccountID.
     *
     * @return int
     */
    public function getToAccountID()
    {
        return $this->ToAccountID;
    }

    /**
     * Sets ToAccountID.
     *
     * @param int $value
     * @return $this
     */
    public function setToAccountID($value)
    {
        $this->ToAccountID = $value;

        return $this;
    }

    /**
     * Gets Amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets Amount.
     *
     * @param float $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

