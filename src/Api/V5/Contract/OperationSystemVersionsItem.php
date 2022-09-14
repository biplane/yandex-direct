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
    protected $OsName = null;

    protected $OsVersion = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getOsName(): string
    {
        return $this->OsName;
    }

    /**
     * @return $this
     */
    public function setOsName(string $value)
    {
        $this->OsName = $value;

        return $this;
    }

    public function getOsVersion(): string
    {
        return $this->OsVersion;
    }

    /**
     * @return $this
     */
    public function setOsVersion(string $value)
    {
        $this->OsVersion = $value;

        return $this;
    }
}
