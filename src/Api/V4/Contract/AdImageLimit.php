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
    protected $Login = null;

    protected $Capacity = null;

    protected $Utilized = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getCapacity(): int
    {
        return $this->Capacity;
    }

    /**
     * @return $this
     */
    public function setCapacity(int $value)
    {
        $this->Capacity = $value;

        return $this;
    }

    public function getUtilized(): int
    {
        return $this->Utilized;
    }

    /**
     * @return $this
     */
    public function setUtilized(int $value)
    {
        $this->Utilized = $value;

        return $this;
    }
}
