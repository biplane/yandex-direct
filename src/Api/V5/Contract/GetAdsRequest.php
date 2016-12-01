<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    protected $TextAdFieldNames = null;

    protected $MobileAppAdFieldNames = null;

    protected $DynamicTextAdFieldNames = null;

    protected $TextImageAdFieldNames = null;

    protected $MobileAppImageAdFieldNames = null;

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
     * @return self
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
     * @return self
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
        return $this->TextAdFieldNames;
    }

    /**
     * Sets TextAdFieldNames.
     *
     * @param string[]|null $value
     * @return self
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
        return $this->MobileAppAdFieldNames;
    }

    /**
     * Sets MobileAppAdFieldNames.
     *
     * @param string[]|null $value
     * @return self
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
        return $this->DynamicTextAdFieldNames;
    }

    /**
     * Sets DynamicTextAdFieldNames.
     *
     * @param string[]|null $value
     * @return self
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
        return $this->TextImageAdFieldNames;
    }

    /**
     * Sets TextImageAdFieldNames.
     *
     * @param string[]|null $value
     * @return self
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
        return $this->MobileAppImageAdFieldNames;
    }

    /**
     * Sets MobileAppImageAdFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see MobileAppImageAdFieldEnum
     */
    public function setMobileAppImageAdFieldNames(array $value = null)
    {
        $this->MobileAppImageAdFieldNames = $value;

        return $this;
    }


}

