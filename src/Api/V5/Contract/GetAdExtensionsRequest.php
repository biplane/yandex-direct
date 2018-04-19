<?php

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
     * @return $this
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
        return isset($this->CalloutFieldNames) ? $this->CalloutFieldNames : null;
    }

    /**
     * Sets CalloutFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see CalloutFieldEnum
     */
    public function setCalloutFieldNames(array $value = null)
    {
        $this->CalloutFieldNames = $value;

        return $this;
    }


}

