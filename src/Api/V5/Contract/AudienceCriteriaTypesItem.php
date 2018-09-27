<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceCriteriaTypesItem
{

    protected $Type = null;

    protected $BlockElement = null;

    protected $Name = null;

    protected $Description = null;

    protected $CanSelect = null;

    /**
     * Creates a new instance of AudienceCriteriaTypesItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * Gets BlockElement.
     *
     * @return string
     */
    public function getBlockElement()
    {
        return $this->BlockElement;
    }

    /**
     * Sets BlockElement.
     *
     * @param string $value
     * @return $this
     */
    public function setBlockElement($value)
    {
        $this->BlockElement = $value;

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
     * Gets CanSelect.
     *
     * @return string
     * @see CanSelectEnum
     */
    public function getCanSelect()
    {
        return $this->CanSelect;
    }

    /**
     * Sets CanSelect.
     *
     * @param string $value
     * @return $this
     * @see CanSelectEnum
     */
    public function setCanSelect($value)
    {
        $this->CanSelect = $value;

        return $this;
    }


}

