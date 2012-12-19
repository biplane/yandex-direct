<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientRight
{
    /**
     * @var string
     */
    protected $RightName;
    /**
     * @var string
     */
    protected $Value;

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
     * Gets the RightName.
     *
     * @return string
     */
    public function getRightName()
    {
        return $this->RightName;
    }

    /**
     * Sets the RightName.
     *
     * @param string $RightName
     *
     * @return ClientRight
     */
    public function setRightName($RightName)
    {
        $this->RightName = $RightName;

        return $this;
    }

    /**
     * Gets the Value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets the Value.
     *
     * @param string $Value
     *
     * @return ClientRight
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}