<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageLimit
{
    /** @var string */
    protected $Login;

    /** @var int */
    protected $Capacity;

    /** @var int */
    protected $Utilized;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Login
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get Capacity
     */
    public function getCapacity(): int
    {
        return $this->Capacity;
    }

    /**
     * Set Capacity
     *
     * @return $this
     */
    public function setCapacity(int $value)
    {
        $this->Capacity = $value;

        return $this;
    }

    /**
     * Get Utilized
     */
    public function getUtilized(): int
    {
        return $this->Utilized;
    }

    /**
     * Set Utilized
     *
     * @return $this
     */
    public function setUtilized(int $value)
    {
        $this->Utilized = $value;

        return $this;
    }
}
