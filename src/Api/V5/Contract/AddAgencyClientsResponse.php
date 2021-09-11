<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAgencyClientsResponse extends ActionResultBase
{
//    Can be omit.
//    protected $Login = null;

//    Can be omit.
//    protected $Password = null;

//    Can be omit.
//    protected $Email = null;

//    Can be omit.
//    protected $ClientId = null;

    /**
     * Creates a new instance of AddAgencyClientsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
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
     * Gets Password.
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * Sets Password.
     *
     * @return $this
     */
    public function setPassword(?string $value = null)
    {
        $this->Password = $value;

        return $this;
    }

    /**
     * Gets Email.
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets ClientId.
     */
    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * Sets ClientId.
     *
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }
}
