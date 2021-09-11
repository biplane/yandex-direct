<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdExtensionsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $CalloutFieldNames = null;

    /**
     * Creates a new instance of GetAdExtensionsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): AdExtensionsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(AdExtensionsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see AdExtensionFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see AdExtensionFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets CalloutFieldNames.
     *
     * @see CalloutFieldEnum
     *
     * @return string[]|null
     */
    public function getCalloutFieldNames(): ?array
    {
        return $this->CalloutFieldNames ?? null;
    }

    /**
     * Sets CalloutFieldNames.
     *
     * @see CalloutFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCalloutFieldNames(?array $value = null)
    {
        $this->CalloutFieldNames = $value;

        return $this;
    }
}
