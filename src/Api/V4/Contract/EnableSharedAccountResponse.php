<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class EnableSharedAccountResponse
{
//    Can be omitted.
//    protected $Errors;

    /** @var string|null */
    protected $Login = null;

    /** @var int|null */
    protected $AccountID = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Errors
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors ?? null;
    }

    /**
     * Set Errors
     *
     * @param list<Error>|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(?string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get AccountID
     */
    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID
     *
     * @return $this
     */
    public function setAccountID(?int $value)
    {
        $this->AccountID = $value;

        return $this;
    }
}
