<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdImagesRequest extends GetRequestGeneral
{

//    Can be omit.
//    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    /**
     * Creates a new instance of GetAdImagesRequest.
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
     * @return AdImageSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return isset($this->SelectionCriteria) ? $this->SelectionCriteria : null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdImageSelectionCriteria|null $value
     * @return self
     */
    public function setSelectionCriteria(AdImageSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see AdImageFieldEnum
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
     * @see AdImageFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }


}

