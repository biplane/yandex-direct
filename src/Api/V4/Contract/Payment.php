<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Payment
{
    protected $AccountID = null;

    protected $Amount = null;

    protected $Origin = null;

    protected $Contract = null;

    protected $Currency = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAccountID(): int
    {
        return $this->AccountID;
    }

    /**
     * @return $this
     */
    public function setAccountID(int $value)
    {
        $this->AccountID = $value;

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

    public function getOrigin(): ?string
    {
        return $this->Origin;
    }

    /**
     * @return $this
     */
    public function setOrigin(?string $value = null)
    {
        $this->Origin = $value;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->Contract;
    }

    /**
     * @return $this
     */
    public function setContract(?string $value = null)
    {
        $this->Contract = $value;

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
