<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetLeadsRequest extends GetRequestGeneral
{
    /** @var LeadsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'SubmittedAt'|'TurboPageId'|'TurboPageName'|'Data'> */
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
    public function getSelectionCriteria(): LeadsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(LeadsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\LeadFieldEnum
     *
     * @return non-empty-list<'Id'|'SubmittedAt'|'TurboPageId'|'TurboPageName'|'Data'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\LeadFieldEnum
     *
     * @param non-empty-list<'Id'|'SubmittedAt'|'TurboPageId'|'TurboPageName'|'Data'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
