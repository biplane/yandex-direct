<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $MobileAppAdGroupFieldNames = null;

//    Can be omit.
//    protected $DynamicTextAdGroupFieldNames = null;

//    Can be omit.
//    protected $DynamicTextFeedAdGroupFieldNames = null;

//    Can be omit.
//    protected $SmartAdGroupFieldNames = null;

    /**
     * Creates a new instance of GetAdGroupsRequest.
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
     * @return string[]
     * @see AdGroupFieldEnum
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[] $value
     * @return $this
     * @see AdGroupFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroupFieldNames.
     *
     * @return string[]|null
     * @see MobileAppAdGroupFieldEnum
     */
    public function getMobileAppAdGroupFieldNames()
    {
        return isset($this->MobileAppAdGroupFieldNames) ? $this->MobileAppAdGroupFieldNames : null;
    }

    /**
     * Sets MobileAppAdGroupFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see MobileAppAdGroupFieldEnum
     */
    public function setMobileAppAdGroupFieldNames(array $value = null)
    {
        $this->MobileAppAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroupFieldNames.
     *
     * @return string[]|null
     * @see DynamicTextAdGroupFieldEnum
     */
    public function getDynamicTextAdGroupFieldNames()
    {
        return isset($this->DynamicTextAdGroupFieldNames) ? $this->DynamicTextAdGroupFieldNames : null;
    }

    /**
     * Sets DynamicTextAdGroupFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see DynamicTextAdGroupFieldEnum
     */
    public function setDynamicTextAdGroupFieldNames(array $value = null)
    {
        $this->DynamicTextAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextFeedAdGroupFieldNames.
     *
     * @return string[]|null
     * @see DynamicTextFeedAdGroupFieldEnum
     */
    public function getDynamicTextFeedAdGroupFieldNames()
    {
        return isset($this->DynamicTextFeedAdGroupFieldNames) ? $this->DynamicTextFeedAdGroupFieldNames : null;
    }

    /**
     * Sets DynamicTextFeedAdGroupFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see DynamicTextFeedAdGroupFieldEnum
     */
    public function setDynamicTextFeedAdGroupFieldNames(array $value = null)
    {
        $this->DynamicTextFeedAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroupFieldNames.
     *
     * @return string[]|null
     * @see SmartAdGroupFieldEnum
     */
    public function getSmartAdGroupFieldNames()
    {
        return isset($this->SmartAdGroupFieldNames) ? $this->SmartAdGroupFieldNames : null;
    }

    /**
     * Sets SmartAdGroupFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see SmartAdGroupFieldEnum
     */
    public function setSmartAdGroupFieldNames(array $value = null)
    {
        $this->SmartAdGroupFieldNames = $value;

        return $this;
    }


}

