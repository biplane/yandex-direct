<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\TurboPages;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
{
//    Can be omitted.
//    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'Name'|'Href'|'PreviewHref'|'TurboSiteHref'|'BoundWithHref'> */
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
    public function getSelectionCriteria(): ?TurboPagesSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?TurboPagesSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\TurboPages\TurboPageFieldEnum
     *
     * @return non-empty-list<'Id'|'Name'|'Href'|'PreviewHref'|'TurboSiteHref'|'BoundWithHref'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\TurboPages\TurboPageFieldEnum
     *
     * @param non-empty-list<'Id'|'Name'|'Href'|'PreviewHref'|'TurboSiteHref'|'BoundWithHref'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
