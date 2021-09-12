<?php

declare(strict_types=1);

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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getFromAccountID(): int
    {
        return $this->FromAccountID;
    }

    /**
     * @return $this
     */
    public function setFromAccountID(int $value)
    {
        $this->FromAccountID = $value;

        return $this;
    }

    public function getToAccountID(): int
    {
        return $this->ToAccountID;
    }

    /**
     * @return $this
     */
    public function setToAccountID(int $value)
    {
        $this->ToAccountID = $value;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * @return $this
     */
    public function setAmount(float $value)
    {
        $this->Amount = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
