<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets OsName.
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->OsName;
    }

    /**
     * Sets OsName.
     *
     * @param string $value
     * @return $this
     */
    public function setOsName($value)
    {
        $this->OsName = $value;

        return $this;
    }

    /**
     * Gets OsVersion.
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->OsVersion;
    }

    /**
     * Sets OsVersion.
     *
     * @param string $value
     * @return $this
     */
    public function setOsVersion($value)
    {
        $this->OsVersion = $value;

        return $this;
    }


}

