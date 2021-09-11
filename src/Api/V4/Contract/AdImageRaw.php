<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageRaw
{
    protected $Login = null;

    protected $RawData = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImageRaw.
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
     * Gets RawData.
     */
    public function getRawData(): string
    {
        return $this->RawData;
    }

    /**
     * Sets RawData.
     *
     * @return $this
     */
    public function setRawData(string $value)
    {
        $this->RawData = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
