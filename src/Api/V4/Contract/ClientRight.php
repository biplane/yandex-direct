<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientRight
{
    protected $RightName = null;

    protected $Value = null;

    protected $AgencyName = null;

    /**
     * Creates a new instance of ClientRight.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RightName.
     */
    public function getRightName(): string
    {
        return $this->RightName;
    }

    /**
     * Sets RightName.
     *
     * @return $this
     */
    public function setRightName(string $value)
    {
        $this->RightName = $value;

        return $this;
    }

    /**
     * Gets Value.
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets AgencyName.
     */
    public function getAgencyName(): ?string
    {
        return $this->AgencyName;
    }

    /**
     * Sets AgencyName.
     *
     * @return $this
     */
    public function setAgencyName(?string $value = null)
    {
        $this->AgencyName = $value;

        return $this;
    }
}
