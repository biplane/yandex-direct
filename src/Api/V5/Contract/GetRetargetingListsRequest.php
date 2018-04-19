<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetRetargetingListsRequest extends GetRequestGeneral
{

//    Can be omit.
//    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    /**
     * Creates a new instance of GetRetargetingListsRequest.
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
     * @return RetargetingListSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return isset($this->SelectionCriteria) ? $this->SelectionCriteria : null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param RetargetingListSelectionCriteria|null $value
     * @return self
     */
    public function setSelectionCriteria(RetargetingListSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see RetargetingListFieldEnum
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
     * @see RetargetingListFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }


}

