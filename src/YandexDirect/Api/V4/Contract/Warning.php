<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Warning
{

    protected $WarningCode = null;

    protected $WarningString = null;

    protected $Description = null;

    /**
     * Creates a new instance of Warning.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets WarningCode.
     *
     * @return int
     */
    public function getWarningCode()
    {
        return $this->WarningCode;
    }

    /**
     * Sets WarningCode.
     *
     * @param int $value
     * @return self
     */
    public function setWarningCode($value)
    {
        $this->WarningCode = $value;

        return $this;
    }

    /**
     * Gets WarningString.
     *
     * @return string
     */
    public function getWarningString()
    {
        return $this->WarningString;
    }

    /**
     * Sets WarningString.
     *
     * @param string $value
     * @return self
     */
    public function setWarningString($value)
    {
        $this->WarningString = $value;

        return $this;
    }

    /**
     * Gets Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @param string|null $value
     * @return self
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;

        return $this;
    }


}

