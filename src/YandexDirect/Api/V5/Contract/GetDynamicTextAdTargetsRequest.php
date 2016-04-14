<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDynamicTextAdTargetsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = array(
        
    );

    /**
     * Creates a new instance of GetDynamicTextAdTargetsRequest.
     *
     * @return GetDynamicTextAdTargetsRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return WebpagesSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param WebpagesSelectionCriteria $value
     * @return $this
     */
    public function setSelectionCriteria(WebpagesSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return WebpageFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param WebpageFieldEnum[] $value
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }


}

