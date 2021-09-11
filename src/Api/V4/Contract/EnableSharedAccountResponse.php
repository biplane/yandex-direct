<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EnableSharedAccountResponse
{
    protected $Errors = null;

    protected $Login = null;

    protected $AccountID = null;

    /**
     * Creates a new instance of EnableSharedAccountResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Errors.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     */
    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @return $this
     */
    public function setAccountID(?int $value = null)
    {
        $this->AccountID = $value;

        return $this;
    }
}
