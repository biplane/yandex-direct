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

//    Can be omitted.
//    protected $CalloutFieldNames = null;

    public function getSelectionCriteria(): AdExtensionsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(AdExtensionsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see AdExtensionFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
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
     * @see CalloutFieldEnum
     *
     * @return string[]|null
     */
    public function getCalloutFieldNames(): ?array
    {
        return $this->CalloutFieldNames ?? null;
    }

    /**
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
