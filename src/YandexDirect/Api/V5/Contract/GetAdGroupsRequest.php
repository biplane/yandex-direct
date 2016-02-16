<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = array(
        
    );

    protected $MobileAppAdGroupFieldNames = null;

    protected $DynamicTextAdGroupFieldNames = null;

    /**
     * Creates a new instance of GetAdGroupsRequest.
     *
     * @return GetAdGroupsRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return AdGroupsSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdGroupsSelectionCriteria $value
     * @return $this
     */
    public function setSelectionCriteria(AdGroupsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return AdGroupFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param AdGroupFieldEnum[] $value
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroupFieldNames.
     *
     * @return MobileAppAdGroupFieldEnum[]|null
     */
    public function getMobileAppAdGroupFieldNames()
    {
        return $this->MobileAppAdGroupFieldNames;
    }

    /**
     * Sets MobileAppAdGroupFieldNames.
     *
     * @param MobileAppAdGroupFieldEnum[]|null $value
     * @return $this
     */
    public function setMobileAppAdGroupFieldNames(array $value = null)
    {
        $this->MobileAppAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroupFieldNames.
     *
     * @return DynamicTextAdGroupFieldEnum[]|null
     */
    public function getDynamicTextAdGroupFieldNames()
    {
        return $this->DynamicTextAdGroupFieldNames;
    }

    /**
     * Sets DynamicTextAdGroupFieldNames.
     *
     * @param DynamicTextAdGroupFieldEnum[]|null $value
     * @return $this
     */
    public function setDynamicTextAdGroupFieldNames(array $value = null)
    {
        $this->DynamicTextAdGroupFieldNames = $value;

        return $this;
    }


}

