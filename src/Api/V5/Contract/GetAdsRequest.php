<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $TextAdFieldNames = null;

//    Can be omit.
//    protected $MobileAppAdFieldNames = null;

//    Can be omit.
//    protected $DynamicTextAdFieldNames = null;

//    Can be omit.
//    protected $TextImageAdFieldNames = null;

//    Can be omit.
//    protected $MobileAppImageAdFieldNames = null;

//    Can be omit.
//    protected $TextAdBuilderAdFieldNames = null;

//    Can be omit.
//    protected $MobileAppAdBuilderAdFieldNames = null;

    /**
     * Creates a new instance of GetAdsRequest.
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
     * @return string[]
     * @see AdFieldEnum
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
     * @see AdFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets TextAdFieldNames.
     *
     * @return string[]|null
     * @see TextAdFieldEnum
     */
    public function getTextAdFieldNames()
    {
        return isset($this->TextAdFieldNames) ? $this->TextAdFieldNames : null;
    }

    /**
     * Sets TextAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see TextAdFieldEnum
     */
    public function setTextAdFieldNames(array $value = null)
    {
        $this->TextAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdFieldNames.
     *
     * @return string[]|null
     * @see MobileAppAdFieldEnum
     */
    public function getMobileAppAdFieldNames()
    {
        return isset($this->MobileAppAdFieldNames) ? $this->MobileAppAdFieldNames : null;
    }

    /**
     * Sets MobileAppAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see MobileAppAdFieldEnum
     */
    public function setMobileAppAdFieldNames(array $value = null)
    {
        $this->MobileAppAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdFieldNames.
     *
     * @return string[]|null
     * @see DynamicTextAdFieldEnum
     */
    public function getDynamicTextAdFieldNames()
    {
        return isset($this->DynamicTextAdFieldNames) ? $this->DynamicTextAdFieldNames : null;
    }

    /**
     * Sets DynamicTextAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see DynamicTextAdFieldEnum
     */
    public function setDynamicTextAdFieldNames(array $value = null)
    {
        $this->DynamicTextAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets TextImageAdFieldNames.
     *
     * @return string[]|null
     * @see TextImageAdFieldEnum
     */
    public function getTextImageAdFieldNames()
    {
        return isset($this->TextImageAdFieldNames) ? $this->TextImageAdFieldNames : null;
    }

    /**
     * Sets TextImageAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see TextImageAdFieldEnum
     */
    public function setTextImageAdFieldNames(array $value = null)
    {
        $this->TextImageAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAdFieldNames.
     *
     * @return string[]|null
     * @see MobileAppImageAdFieldEnum
     */
    public function getMobileAppImageAdFieldNames()
    {
        return isset($this->MobileAppImageAdFieldNames) ? $this->MobileAppImageAdFieldNames : null;
    }

    /**
     * Sets MobileAppImageAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see MobileAppImageAdFieldEnum
     */
    public function setMobileAppImageAdFieldNames(array $value = null)
    {
        $this->MobileAppImageAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAdFieldNames.
     *
     * @return string[]|null
     * @see TextAdBuilderAdFieldEnum
     */
    public function getTextAdBuilderAdFieldNames()
    {
        return isset($this->TextAdBuilderAdFieldNames) ? $this->TextAdBuilderAdFieldNames : null;
    }

    /**
     * Sets TextAdBuilderAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see TextAdBuilderAdFieldEnum
     */
    public function setTextAdBuilderAdFieldNames(array $value = null)
    {
        $this->TextAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAdFieldNames.
     *
     * @return string[]|null
     * @see MobileAppAdBuilderAdFieldEnum
     */
    public function getMobileAppAdBuilderAdFieldNames()
    {
        return isset($this->MobileAppAdBuilderAdFieldNames) ? $this->MobileAppAdBuilderAdFieldNames : null;
    }

    /**
     * Sets MobileAppAdBuilderAdFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see MobileAppAdBuilderAdFieldEnum
     */
    public function setMobileAppAdBuilderAdFieldNames(array $value = null)
    {
        $this->MobileAppAdBuilderAdFieldNames = $value;

        return $this;
    }


}

