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
//    protected $SelectionCriteria = null;

//    Can be omitted.
//    protected $FieldNames = null;

//    Can be omitted.
//    protected $SitelinkFieldNames = null;

    public function getSelectionCriteria(): ?IdsCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?IdsCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see SitelinksSetFieldEnum
     *
     * @return string[]|null
     */
    public function getFieldNames(): ?array
    {
        return $this->FieldNames ?? null;
    }

    /**
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
     * @see SitelinkFieldEnum
     *
     * @return string[]|null
     */
    public function getSitelinkFieldNames(): ?array
    {
        return $this->SitelinkFieldNames ?? null;
    }

    /**
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
