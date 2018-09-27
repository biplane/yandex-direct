<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceDemographicProfilesItem
{

    protected $Id = null;

    protected $Type = null;

    protected $Name = null;

    protected $Description = null;

    /**
     * Creates a new instance of AudienceDemographicProfilesItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->Type = $value;

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

    /**
     * Gets Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @param string $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->Description = $value;

        return $this;
    }


}

