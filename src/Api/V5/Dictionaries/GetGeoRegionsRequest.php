<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Dictionaries;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetGeoRegionsRequest extends GetRequestGeneral
{
    /** @var GeoRegionsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'GeoRegionId'|'GeoRegionName'|'ParentGeoRegionNames'> */
    protected $FieldNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): GeoRegionsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(GeoRegionsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Dictionaries\GeoRegionFieldEnum
     *
     * @return non-empty-list<'GeoRegionId'|'GeoRegionName'|'ParentGeoRegionNames'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Dictionaries\GeoRegionFieldEnum
     *
     * @param non-empty-list<'GeoRegionId'|'GeoRegionName'|'ParentGeoRegionNames'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
