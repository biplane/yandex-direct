<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetVCardsRequest extends GetRequestGeneral
{
//    Can be omitted.
//    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'Country'|'City'|'Street'|'House'|'Building'|'Apartment'|'CompanyName'|'ExtraMessage'|'ContactPerson'|'ContactEmail'|'MetroStationId'|'CampaignId'|'Ogrn'|'WorkTime'|'InstantMessenger'|'Phone'|'PointOnMap'> */
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\VCardFieldEnum
     *
     * @return non-empty-list<'Id'|'Country'|'City'|'Street'|'House'|'Building'|'Apartment'|'CompanyName'|'ExtraMessage'|'ContactPerson'|'ContactEmail'|'MetroStationId'|'CampaignId'|'Ogrn'|'WorkTime'|'InstantMessenger'|'Phone'|'PointOnMap'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\VCardFieldEnum
     *
     * @param non-empty-list<'Id'|'Country'|'City'|'Street'|'House'|'Building'|'Apartment'|'CompanyName'|'ExtraMessage'|'ContactPerson'|'ContactEmail'|'MetroStationId'|'CampaignId'|'Ogrn'|'WorkTime'|'InstantMessenger'|'Phone'|'PointOnMap'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
