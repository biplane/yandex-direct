<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceCriteriaTypesItem
{
    /** @var string */
    protected $Type;

    /** @var string */
    protected $BlockElement;

    /** @var string */
    protected $Name;

    /** @var string */
    protected $Description;

    /** @var 'ALL'|'EXCEPT_ALL' */
    protected $CanSelect;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Type
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get BlockElement
     */
    public function getBlockElement(): string
    {
        return $this->BlockElement;
    }

    /**
     * Set BlockElement
     *
     * @return $this
     */
    public function setBlockElement(string $value)
    {
        $this->BlockElement = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get Description
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * Set Description
     *
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Get CanSelect
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CanSelectEnum
     *
     * @return 'ALL'|'EXCEPT_ALL'
     */
    public function getCanSelect(): string
    {
        return $this->CanSelect;
    }

    /**
     * Set CanSelect
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CanSelectEnum
     *
     * @param 'ALL'|'EXCEPT_ALL' $value
     *
     * @return $this
     */
    public function setCanSelect(string $value)
    {
        $this->CanSelect = $value;

        return $this;
    }
}
