<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Transfer
{
    /**
     * @var int
     */
    protected $FromAccountID;
    /**
     * @var int
     */
    protected $ToAccountID;
    /**
     * @var float
     */
    protected $Amount;
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
     * Gets the FromAccountID.
     *
     * @return int
     */
    public function getFromAccountID()
    {
        return $this->FromAccountID;
    }

    /**
     * Sets the FromAccountID.
     *
     * @param int $FromAccountID
     *
     * @return Transfer
     */
    public function setFromAccountID($FromAccountID)
    {
        $this->FromAccountID = $FromAccountID;

        return $this;
    }

    /**
     * Gets the ToAccountID.
     *
     * @return int
     */
    public function getToAccountID()
    {
        return $this->ToAccountID;
    }

    /**
     * Sets the ToAccountID.
     *
     * @param int $ToAccountID
     *
     * @return Transfer
     */
    public function setToAccountID($ToAccountID)
    {
        $this->ToAccountID = $ToAccountID;

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
     * @return Transfer
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

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
     * @return Transfer
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}