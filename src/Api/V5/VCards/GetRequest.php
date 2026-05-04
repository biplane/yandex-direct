<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\VCards;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Biplane\YandexDirect\Api\V5\General\IdsCriteria;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
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
    #[Override]
    public static function create(): static
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
     * @see \Biplane\YandexDirect\Api\V5\VCards\VCardFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\VCards\VCardFieldEnum
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
