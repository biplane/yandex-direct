<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageURL
{

    protected $Login = null;

    protected $URL = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImageURL.
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
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets URL.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Sets URL.
     *
     * @param string $value
     * @return $this
     */
    public function setURL($value)
    {
        $this->URL = $value;

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
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }


}

