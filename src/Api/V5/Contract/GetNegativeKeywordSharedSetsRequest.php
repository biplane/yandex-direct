<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetNegativeKeywordSharedSetsRequest extends GetRequestGeneral
{

//    Can be omit.
//    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    /**
     * Creates a new instance of GetNegativeKeywordSharedSetsRequest.
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
     * @return IdsCriteria|null
     */
    public function getSelectionCriteria()
    {
        return isset($this->SelectionCriteria) ? $this->SelectionCriteria : null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param IdsCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(IdsCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see NegativeKeywordSharedSetFieldEnum
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
     * @see NegativeKeywordSharedSetFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }


}

