<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetSitelinksRequest extends GetRequestGeneral
{
//    Can be omitted.
//    protected $SelectionCriteria;

//    Can be omitted.
//    protected $FieldNames;

//    Can be omitted.
//    protected $SitelinkFieldNames;

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
     * @see \Biplane\YandexDirect\Api\V5\Contract\SitelinksSetFieldEnum
     *
     * @return list<'Id'|'Sitelinks'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames ?? [];
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SitelinksSetFieldEnum
     *
     * @param list<'Id'|'Sitelinks'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get SitelinkFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SitelinkFieldEnum
     *
     * @return list<'Title'|'Href'|'Description'|'TurboPageId'>
     */
    public function getSitelinkFieldNames(): array
    {
        return $this->SitelinkFieldNames ?? [];
    }

    /**
     * Set SitelinkFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SitelinkFieldEnum
     *
     * @param list<'Title'|'Href'|'Description'|'TurboPageId'> $value
     *
     * @return $this
     */
    public function setSitelinkFieldNames(array $value)
    {
        $this->SitelinkFieldNames = $value;

        return $this;
    }
}
