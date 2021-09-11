<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageLimit
{
    protected $Login = null;

    protected $Capacity = null;

    protected $Utilized = null;

    /**
     * Creates a new instance of AdImageLimit.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Capacity.
     */
    public function getCapacity(): int
    {
        return $this->Capacity;
    }

    /**
     * Sets Capacity.
     *
     * @return $this
     */
    public function setCapacity(int $value)
    {
        $this->Capacity = $value;

        return $this;
    }

    /**
     * Gets Utilized.
     */
    public function getUtilized(): int
    {
        return $this->Utilized;
    }

    /**
     * Sets Utilized.
     *
     * @return $this
     */
    public function setUtilized(int $value)
    {
        $this->Utilized = $value;

        return $this;
    }
}
