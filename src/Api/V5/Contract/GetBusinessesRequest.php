<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetBusinessesRequest extends GetRequestGeneral
{
//    Can be omitted.
//    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'Name'|'Address'|'Phone'|'ProfileUrl'|'InternalUrl'|'IsPublished'|'MergedIds'|'Rubric'|'Urls'|'HasOffice'> */
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
    public function getSelectionCriteria(): ?IdsCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?IdsCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BusinessFieldEnum
     *
     * @return non-empty-list<'Id'|'Name'|'Address'|'Phone'|'ProfileUrl'|'InternalUrl'|'IsPublished'|'MergedIds'|'Rubric'|'Urls'|'HasOffice'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BusinessFieldEnum
     *
     * @param non-empty-list<'Id'|'Name'|'Address'|'Phone'|'ProfileUrl'|'InternalUrl'|'IsPublished'|'MergedIds'|'Rubric'|'Urls'|'HasOffice'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
