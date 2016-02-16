<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = array(
        
    );

    protected $TextAdFieldNames = null;

    protected $MobileAppAdFieldNames = null;

    protected $DynamicTextAdFieldNames = null;

    /**
     * Creates a new instance of GetAdsRequest.
     *
     * @return GetAdsRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return AdsSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdsSelectionCriteria $value
     * @return $this
     */
    public function setSelectionCriteria(AdsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return AdFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param AdFieldEnum[] $value
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets TextAdFieldNames.
     *
     * @return TextAdFieldEnum[]|null
     */
    public function getTextAdFieldNames()
    {
        return $this->TextAdFieldNames;
    }

    /**
     * Sets TextAdFieldNames.
     *
     * @param TextAdFieldEnum[]|null $value
     * @return $this
     */
    public function setTextAdFieldNames(array $value = null)
    {
        $this->TextAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdFieldNames.
     *
     * @return MobileAppAdFieldEnum[]|null
     */
    public function getMobileAppAdFieldNames()
    {
        return $this->MobileAppAdFieldNames;
    }

    /**
     * Sets MobileAppAdFieldNames.
     *
     * @param MobileAppAdFieldEnum[]|null $value
     * @return $this
     */
    public function setMobileAppAdFieldNames(array $value = null)
    {
        $this->MobileAppAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdFieldNames.
     *
     * @return DynamicTextAdFieldEnum[]|null
     */
    public function getDynamicTextAdFieldNames()
    {
        return $this->DynamicTextAdFieldNames;
    }

    /**
     * Sets DynamicTextAdFieldNames.
     *
     * @param DynamicTextAdFieldEnum[]|null $value
     * @return $this
     */
    public function setDynamicTextAdFieldNames(array $value = null)
    {
        $this->DynamicTextAdFieldNames = $value;

        return $this;
    }


}

