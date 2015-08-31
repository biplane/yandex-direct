<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageRaw
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $RawData;
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
     * @return AdImageRaw
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the RawData.
     *
     * @return string
     */
    public function getRawData()
    {
        return $this->RawData;
    }

    /**
     * Sets the RawData.
     *
     * @param string $RawData
     *
     * @return AdImageRaw
     */
    public function setRawData($RawData)
    {
        $this->RawData = $RawData;

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
     * @return AdImageRaw
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}