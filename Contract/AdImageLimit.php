<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageLimit
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int
     */
    protected $Capacity;
    /**
     * @var int
     */
    protected $Utilized;

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
     * @return AdImageLimit
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the Capacity.
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * Sets the Capacity.
     *
     * @param int $Capacity
     *
     * @return AdImageLimit
     */
    public function setCapacity($Capacity)
    {
        $this->Capacity = $Capacity;

        return $this;
    }

    /**
     * Gets the Utilized.
     *
     * @return int
     */
    public function getUtilized()
    {
        return $this->Utilized;
    }

    /**
     * Sets the Utilized.
     *
     * @param int $Utilized
     *
     * @return AdImageLimit
     */
    public function setUtilized($Utilized)
    {
        $this->Utilized = $Utilized;

        return $this;
    }
}