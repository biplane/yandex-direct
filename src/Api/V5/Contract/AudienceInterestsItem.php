<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceInterestsItem
{

    protected $InterestKey = null;

    protected $Id = null;

    protected $ParentId = null;

    protected $Name = null;

    protected $Description = null;

    protected $InterestType = null;

    /**
     * Creates a new instance of AudienceInterestsItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets InterestKey.
     *
     * @return int
     */
    public function getInterestKey()
    {
        return $this->InterestKey;
    }

    /**
     * Sets InterestKey.
     *
     * @param int $value
     * @return $this
     */
    public function setInterestKey($value)
    {
        $this->InterestKey = $value;

        return $this;
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
     * Gets ParentId.
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->ParentId;
    }

    /**
     * Sets ParentId.
     *
     * @param int $value
     * @return $this
     */
    public function setParentId($value)
    {
        $this->ParentId = $value;

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

    /**
     * Gets InterestType.
     *
     * @return string
     * @see InterestTypeEnum
     */
    public function getInterestType()
    {
        return $this->InterestType;
    }

    /**
     * Sets InterestType.
     *
     * @param string $value
     * @return $this
     * @see InterestTypeEnum
     */
    public function setInterestType($value)
    {
        $this->InterestType = $value;

        return $this;
    }


}

