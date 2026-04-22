<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetAdExtensionsRequest extends GetRequestGeneral
{
    /** @var AdExtensionsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'Type'|'State'|'Status'|'StatusClarification'|'Associated'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $CalloutFieldNames;

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
    public function getSelectionCriteria(): AdExtensionsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(AdExtensionsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionFieldEnum
     *
     * @return non-empty-list<'Id'|'Type'|'State'|'Status'|'StatusClarification'|'Associated'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionFieldEnum
     *
     * @param non-empty-list<'Id'|'Type'|'State'|'Status'|'StatusClarification'|'Associated'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get CalloutFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CalloutFieldEnum
     *
     * @return list<'CalloutText'>
     */
    public function getCalloutFieldNames(): array
    {
        return $this->CalloutFieldNames ?? [];
    }

    /**
     * Set CalloutFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CalloutFieldEnum
     *
     * @param list<'CalloutText'> $value
     *
     * @return $this
     */
    public function setCalloutFieldNames(array $value)
    {
        $this->CalloutFieldNames = $value;

        return $this;
    }
}
