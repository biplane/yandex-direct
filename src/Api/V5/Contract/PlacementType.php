<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PlacementType
{
    protected $Type = null;

    protected $Value = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see PlacementTypesEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @see PlacementTypesEnum
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
