<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UrlFeedAdd extends UrlFeedBase
{

    protected $Url = null;

//    Can be omit.
//    protected $Login = null;

//    Can be omit.
//    protected $Password = null;

    /**
     * Creates a new instance of UrlFeedAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * Sets Url.
     *
     * @param string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : null;
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
     * Gets Password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }

    /**
     * Sets Password.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPassword($value = null)
    {
        $this->Password = $value;

        return $this;
    }


}

