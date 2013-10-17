<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Warning
{
    /**
     * @var int
     */
    protected $WarningCode;
    /**
     * @var string
     */
    protected $WarningString;
    /**
     * @var string
     */
    protected $Description;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the WarningCode.
     *
     * @return int
     */
    public function getWarningCode()
    {
        return $this->WarningCode;
    }

    /**
     * Sets the WarningCode.
     *
     * @param int $WarningCode
     *
     * @return Warning
     */
    public function setWarningCode($WarningCode)
    {
        $this->WarningCode = $WarningCode;

        return $this;
    }

    /**
     * Gets the WarningString.
     *
     * @return string
     */
    public function getWarningString()
    {
        return $this->WarningString;
    }

    /**
     * Sets the WarningString.
     *
     * @param string $WarningString
     *
     * @return Warning
     */
    public function setWarningString($WarningString)
    {
        $this->WarningString = $WarningString;

        return $this;
    }

    /**
     * Gets the Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the Description.
     *
     * @param string $Description
     *
     * @return Warning
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }
}