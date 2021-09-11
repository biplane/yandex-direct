<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetTurboPagesRequest extends GetRequestGeneral
{
//    Can be omit.
//    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    /**
     * Creates a new instance of GetTurboPagesRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?TurboPagesSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?TurboPagesSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see TurboPageFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see TurboPageFieldEnum
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
