<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImage
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $AdImageHash;
    /**
     * @var string
     */
    protected $AdImageURL;
    /**
     * @var string
     */
    protected $Assigned;
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
     * @return AdImage
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the AdImageHash.
     *
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets the AdImageHash.
     *
     * @param string $AdImageHash
     *
     * @return AdImage
     */
    public function setAdImageHash($AdImageHash)
    {
        $this->AdImageHash = $AdImageHash;

        return $this;
    }

    /**
     * Gets the AdImageURL.
     *
     * @return string
     */
    public function getAdImageURL()
    {
        return $this->AdImageURL;
    }

    /**
     * Sets the AdImageURL.
     *
     * @param string $AdImageURL
     *
     * @return AdImage
     */
    public function setAdImageURL($AdImageURL)
    {
        $this->AdImageURL = $AdImageURL;

        return $this;
    }

    /**
     * Gets the Assigned.
     *
     * @return string
     */
    public function getAssigned()
    {
        return $this->Assigned;
    }

    /**
     * Sets the Assigned.
     *
     * @param string $Assigned
     *
     * @return AdImage
     */
    public function setAssigned($Assigned)
    {
        $this->Assigned = $Assigned;

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
     * @return AdImage
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}