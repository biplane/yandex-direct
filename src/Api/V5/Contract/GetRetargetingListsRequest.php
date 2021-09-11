<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?RetargetingListSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingListSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see RetargetingListFieldEnum
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
     * @see RetargetingListFieldEnum
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
}
