<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return string
     */
    public function getRightName()
    {
        return $this->RightName;
    }

    /**
     * @param string $RightName
     * @return ClientRight
     */
    public function setRightName($RightName)
    {
        $this->RightName = $RightName;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return ClientRight
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}