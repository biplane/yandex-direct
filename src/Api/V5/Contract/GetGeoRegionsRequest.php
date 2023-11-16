<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetGeoRegionsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    public function getSelectionCriteria(): GeoRegionsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(GeoRegionsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see GeoRegionFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see GeoRegionFieldEnum
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
