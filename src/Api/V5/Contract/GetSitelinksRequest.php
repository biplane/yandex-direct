<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return IdsCriteria|null
     */
    public function getSelectionCriteria()
    {
        return isset($this->SelectionCriteria) ? $this->SelectionCriteria : null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param IdsCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(IdsCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]|null
     * @see SitelinksSetFieldEnum
     */
    public function getFieldNames()
    {
        return isset($this->FieldNames) ? $this->FieldNames : null;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see SitelinksSetFieldEnum
     */
    public function setFieldNames(array $value = null)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets SitelinkFieldNames.
     *
     * @return string[]|null
     * @see SitelinkFieldEnum
     */
    public function getSitelinkFieldNames()
    {
        return isset($this->SitelinkFieldNames) ? $this->SitelinkFieldNames : null;
    }

    /**
     * Sets SitelinkFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see SitelinkFieldEnum
     */
    public function setSitelinkFieldNames(array $value = null)
    {
        $this->SitelinkFieldNames = $value;

        return $this;
    }


}

