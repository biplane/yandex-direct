<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Payment
{

    protected $AccountID = null;

    protected $Amount = null;

    protected $Origin = null;

    protected $Contract = null;

    protected $Currency = null;

    /**
     * Creates a new instance of Payment.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AccountID.
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @param int $value
     * @return self
     */
    public function setAccountID($value)
    {
        $this->AccountID = $value;

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
     * @return self
     */
    public function setAmount($value)
    {
        $this->Amount = $value;

        return $this;
    }

    /**
     * Gets Origin.
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * Sets Origin.
     *
     * @param string|null $value
     * @return self
     */
    public function setOrigin($value = null)
    {
        $this->Origin = $value;

        return $this;
    }

    /**
     * Gets Contract.
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * Sets Contract.
     *
     * @param string|null $value
     * @return self
     */
    public function setContract($value = null)
    {
        $this->Contract = $value;

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
     * @return self
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

