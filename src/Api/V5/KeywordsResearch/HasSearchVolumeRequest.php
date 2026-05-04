<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\KeywordsResearch;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class HasSearchVolumeRequest
{
    /** @var HasSearchVolumeSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Keyword'|'RegionIds'|'AllDevices'|'MobilePhones'|'Tablets'|'Desktops'> */
    protected $FieldNames;

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
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): HasSearchVolumeSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(HasSearchVolumeSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeFieldEnum
     *
     * @return non-empty-list<'Keyword'|'RegionIds'|'AllDevices'|'MobilePhones'|'Tablets'|'Desktops'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeFieldEnum
     *
     * @param non-empty-list<'Keyword'|'RegionIds'|'AllDevices'|'MobilePhones'|'Tablets'|'Desktops'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
