<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class OperationSystemVersionsItem
{
    protected $OsName = null;

    protected $OsVersion = null;

    /**
     * Creates a new instance of OperationSystemVersionsItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets OsName.
     */
    public function getOsName(): string
    {
        return $this->OsName;
    }

    /**
     * Sets OsName.
     *
     * @return $this
     */
    public function setOsName(string $value)
    {
        $this->OsName = $value;

        return $this;
    }

    /**
     * Gets OsVersion.
     */
    public function getOsVersion(): string
    {
        return $this->OsVersion;
    }

    /**
     * Sets OsVersion.
     *
     * @return $this
     */
    public function setOsVersion(string $value)
    {
        $this->OsVersion = $value;

        return $this;
    }
}
