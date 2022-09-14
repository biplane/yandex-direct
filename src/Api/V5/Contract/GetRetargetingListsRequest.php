<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRetargetingListsRequest extends GetRequestGeneral
{
//    Can be omitted.
//    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    public function getSelectionCriteria(): ?RetargetingListSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingListSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see RetargetingListFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
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
