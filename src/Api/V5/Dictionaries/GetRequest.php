<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Dictionaries;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, 'Currencies'|'MetroStations'|'GeoRegions'|'GeoRegionNames'|'TimeZones'|'Constants'|'AdCategories'|'OperationSystemVersions'|'ProductivityAssertions'|'SupplySidePlatforms'|'Interests'|'AudienceCriteriaTypes'|'AudienceDemographicProfiles'|'AudienceInterests'|'FilterSchemas'>
 */
#[AllowDynamicProperties]
class GetRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<'Currencies'|'MetroStations'|'GeoRegions'|'GeoRegionNames'|'TimeZones'|'Constants'|'AdCategories'|'OperationSystemVersions'|'ProductivityAssertions'|'SupplySidePlatforms'|'Interests'|'AudienceCriteriaTypes'|'AudienceDemographicProfiles'|'AudienceInterests'|'FilterSchemas'> */
    protected $DictionaryNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get DictionaryNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Dictionaries\DictionaryNameEnum
     *
     * @return non-empty-list<'Currencies'|'MetroStations'|'GeoRegions'|'GeoRegionNames'|'TimeZones'|'Constants'|'AdCategories'|'OperationSystemVersions'|'ProductivityAssertions'|'SupplySidePlatforms'|'Interests'|'AudienceCriteriaTypes'|'AudienceDemographicProfiles'|'AudienceInterests'|'FilterSchemas'>
     */
    public function getDictionaryNames(): array
    {
        return $this->DictionaryNames;
    }

    /**
     * Set DictionaryNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Dictionaries\DictionaryNameEnum
     *
     * @param non-empty-list<'Currencies'|'MetroStations'|'GeoRegions'|'GeoRegionNames'|'TimeZones'|'Constants'|'AdCategories'|'OperationSystemVersions'|'ProductivityAssertions'|'SupplySidePlatforms'|'Interests'|'AudienceCriteriaTypes'|'AudienceDemographicProfiles'|'AudienceInterests'|'FilterSchemas'> $value
     *
     * @return $this
     */
    public function setDictionaryNames(array $value)
    {
        $this->DictionaryNames = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->DictionaryNames);
    }

    /** @return ArrayIterator<int<0, max>, 'Currencies'|'MetroStations'|'GeoRegions'|'GeoRegionNames'|'TimeZones'|'Constants'|'AdCategories'|'OperationSystemVersions'|'ProductivityAssertions'|'SupplySidePlatforms'|'Interests'|'AudienceCriteriaTypes'|'AudienceDemographicProfiles'|'AudienceInterests'|'FilterSchemas'> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->DictionaryNames);
    }
}
