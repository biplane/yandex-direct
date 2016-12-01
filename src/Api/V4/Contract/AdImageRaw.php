<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageRaw
{

    protected $Login = null;

    protected $RawData = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImageRaw.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return self
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets RawData.
     *
     * @return string
     */
    public function getRawData()
    {
        return $this->RawData;
    }

    /**
     * Sets RawData.
     *
     * @param string $value
     * @return self
     */
    public function setRawData($value)
    {
        $this->RawData = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return self
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }


}

