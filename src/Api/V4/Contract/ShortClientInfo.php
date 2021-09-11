<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ShortClientInfo
{
    protected $Login = null;

    protected $FIO = null;

    protected $Role = null;

    protected $SharedAccountEnabled = null;

    /**
     * Creates a new instance of ShortClientInfo.
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
     * Gets FIO.
     */
    public function getFIO(): ?string
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @return $this
     */
    public function setFIO(?string $value = null)
    {
        $this->FIO = $value;

        return $this;
    }

    /**
     * Gets Role.
     */
    public function getRole(): ?string
    {
        return $this->Role;
    }

    /**
     * Sets Role.
     *
     * @return $this
     */
    public function setRole(?string $value = null)
    {
        $this->Role = $value;

        return $this;
    }

    /**
     * Gets SharedAccountEnabled.
     */
    public function getSharedAccountEnabled(): ?string
    {
        return $this->SharedAccountEnabled;
    }

    /**
     * Sets SharedAccountEnabled.
     *
     * @return $this
     */
    public function setSharedAccountEnabled(?string $value = null)
    {
        $this->SharedAccountEnabled = $value;

        return $this;
    }
}
