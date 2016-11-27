<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdExtensionsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    protected $CalloutFieldNames = null;

    /**
     * Creates a new instance of GetAdExtensionsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return AdExtensionsSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdExtensionsSelectionCriteria $value
     * @return self
     */
    public function setSelectionCriteria(AdExtensionsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see AdExtensionFieldEnum
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[] $value
     * @return self
     * @see AdExtensionFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets CalloutFieldNames.
     *
     * @return string[]|null
     * @see CalloutFieldEnum
     */
    public function getCalloutFieldNames()
    {
        return $this->CalloutFieldNames;
    }

    /**
     * Sets CalloutFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see CalloutFieldEnum
     */
    public function setCalloutFieldNames(array $value = null)
    {
        $this->CalloutFieldNames = $value;

        return $this;
    }


}

