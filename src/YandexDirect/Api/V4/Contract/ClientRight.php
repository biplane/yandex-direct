<?php

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
     *
     * @return ClientRight
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RightName.
     *
     * @return string
     */
    public function getRightName()
    {
        return $this->RightName;
    }

    /**
     * Sets RightName.
     *
     * @param string $value
     * @return $this
     */
    public function setRightName($value)
    {
        $this->RightName = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets AgencyName.
     *
     * @return string|null
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * Sets AgencyName.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAgencyName($value = null)
    {
        $this->AgencyName = $value;

        return $this;
    }


}

