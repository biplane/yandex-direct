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
//    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    public function getSelectionCriteria(): ?IdsCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?IdsCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see BusinessFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see BusinessFieldEnum
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
