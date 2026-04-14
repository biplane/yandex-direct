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
//    protected $SelectionCriteria;

    /** @var non-empty-list<'Type'|'Id'|'Name'|'Description'|'Rules'|'IsAvailable'|'Scope'|'AvailableForTargetsInAdGroupTypes'> */
    protected $FieldNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): ?RetargetingListSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingListSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListFieldEnum
     *
     * @return non-empty-list<'Type'|'Id'|'Name'|'Description'|'Rules'|'IsAvailable'|'Scope'|'AvailableForTargetsInAdGroupTypes'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListFieldEnum
     *
     * @param non-empty-list<'Type'|'Id'|'Name'|'Description'|'Rules'|'IsAvailable'|'Scope'|'AvailableForTargetsInAdGroupTypes'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
