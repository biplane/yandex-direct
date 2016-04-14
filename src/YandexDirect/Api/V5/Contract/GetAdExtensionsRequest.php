<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdExtensionsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = array(
        
    );

    protected $CalloutFieldNames = null;

    /**
     * Creates a new instance of GetAdExtensionsRequest.
     *
     * @return GetAdExtensionsRequest
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
     * @return AdExtensionFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param AdExtensionFieldEnum[] $value
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
     * @return CalloutFieldEnum[]|null
     */
    public function getCalloutFieldNames()
    {
        return $this->CalloutFieldNames;
    }

    /**
     * Sets CalloutFieldNames.
     *
     * @param CalloutFieldEnum[]|null $value
     * @return $this
     */
    public function setCalloutFieldNames(array $value = null)
    {
        $this->CalloutFieldNames = $value;

        return $this;
    }


}

