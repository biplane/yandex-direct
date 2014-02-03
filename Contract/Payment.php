<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Payment
{
    /**
     * @var int
     */
    protected $AccountID;
    /**
     * @var float
     */
    protected $Amount;
    /**
     * @var string
     */
    protected $Origin;
    /**
     * @var string
     */
    protected $Contract;
    /**
     * @var string
     */
    protected $Currency;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the AccountID.
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets the AccountID.
     *
     * @param int $AccountID
     *
     * @return Payment
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;

        return $this;
    }

    /**
     * Gets the Amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Sets the Amount.
     *
     * @param float $Amount
     *
     * @return Payment
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * Gets the Origin.
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * Sets the Origin.
     *
     * @param string $Origin
     *
     * @return Payment
     */
    public function setOrigin($Origin)
    {
        $this->Origin = $Origin;

        return $this;
    }

    /**
     * Gets the Contract.
     *
     * @return string
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * Sets the Contract.
     *
     * @param string $Contract
     *
     * @return Payment
     */
    public function setContract($Contract)
    {
        $this->Contract = $Contract;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return Payment
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}