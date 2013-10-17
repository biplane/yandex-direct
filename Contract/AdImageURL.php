<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageURL
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $URL;
    /**
     * @var string
     */
    protected $Name;

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
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return AdImageURL
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the URL.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Sets the URL.
     *
     * @param string $URL
     *
     * @return AdImageURL
     */
    public function setURL($URL)
    {
        $this->URL = $URL;

        return $this;
    }

    /**
     * Gets the Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Name.
     *
     * @param string $Name
     *
     * @return AdImageURL
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}