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
    protected $Type = null;

    protected $BlockElement = null;

    protected $Name = null;

    protected $Description = null;

    protected $CanSelect = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    public function getBlockElement(): string
    {
        return $this->BlockElement;
    }

    /**
     * @return $this
     */
    public function setBlockElement(string $value)
    {
        $this->BlockElement = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * @see CanSelectEnum
     */
    public function getCanSelect(): string
    {
        return $this->CanSelect;
    }

    /**
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
