<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImage
{

    protected $Login = null;

    protected $AdImageHash = null;

    protected $AdImageURL = null;

    protected $Assigned = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImage.
     *
     * @return AdImage
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets AdImageHash.
     *
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string $value
     * @return $this
     */
    public function setAdImageHash($value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets AdImageURL.
     *
     * @return string
     */
    public function getAdImageURL()
    {
        return $this->AdImageURL;
    }

    /**
     * Sets AdImageURL.
     *
     * @param string $value
     * @return $this
     */
    public function setAdImageURL($value)
    {
        $this->AdImageURL = $value;

        return $this;
    }

    /**
     * Gets Assigned.
     *
     * @return string
     */
    public function getAssigned()
    {
        return $this->Assigned;
    }

    /**
     * Sets Assigned.
     *
     * @param string $value
     * @return $this
     */
    public function setAssigned($value)
    {
        $this->Assigned = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }


}

