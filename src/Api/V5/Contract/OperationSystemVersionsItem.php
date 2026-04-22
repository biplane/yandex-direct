<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class OperationSystemVersionsItem
{
    /** @var string */
    protected $OsName;

    /** @var string */
    protected $OsVersion;

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
     * Get OsName
     */
    public function getOsName(): string
    {
        return $this->OsName;
    }

    /**
     * Set OsName
     *
     * @return $this
     */
    public function setOsName(string $value)
    {
        $this->OsName = $value;

        return $this;
    }

    /**
     * Get OsVersion
     */
    public function getOsVersion(): string
    {
        return $this->OsVersion;
    }

    /**
     * Set OsVersion
     *
     * @return $this
     */
    public function setOsVersion(string $value)
    {
        $this->OsVersion = $value;

        return $this;
    }
}
