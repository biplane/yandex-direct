<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetSitelinksRequest extends GetRequestGeneral
{
//    Can be omit.
//    protected $SelectionCriteria = null;

//    Can be omit.
//    protected $FieldNames = null;

//    Can be omit.
//    protected $SitelinkFieldNames = null;

    /**
     * Creates a new instance of GetSitelinksRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?IdsCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?IdsCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see SitelinksSetFieldEnum
     *
     * @return string[]|null
     */
    public function getFieldNames(): ?array
    {
        return $this->FieldNames ?? null;
    }

    /**
     * Sets FieldNames.
     *
     * @see SitelinksSetFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setFieldNames(?array $value = null)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets SitelinkFieldNames.
     *
     * @see SitelinkFieldEnum
     *
     * @return string[]|null
     */
    public function getSitelinkFieldNames(): ?array
    {
        return $this->SitelinkFieldNames ?? null;
    }

    /**
     * Sets SitelinkFieldNames.
     *
     * @see SitelinkFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSitelinkFieldNames(?array $value = null)
    {
        $this->SitelinkFieldNames = $value;

        return $this;
    }
}
