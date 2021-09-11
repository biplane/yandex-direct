<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Type.
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets BlockElement.
     */
    public function getBlockElement(): string
    {
        return $this->BlockElement;
    }

    /**
     * Sets BlockElement.
     *
     * @return $this
     */
    public function setBlockElement(string $value)
    {
        $this->BlockElement = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Description.
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Gets CanSelect.
     *
     * @see CanSelectEnum
     */
    public function getCanSelect(): string
    {
        return $this->CanSelect;
    }

    /**
     * Sets CanSelect.
     *
     * @see CanSelectEnum
     *
     * @return $this
     */
    public function setCanSelect(string $value)
    {
        $this->CanSelect = $value;

        return $this;
    }
}
