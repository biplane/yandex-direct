<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omitted.
//    protected $TextAdFieldNames = null;

//    Can be omitted.
//    protected $TextAdPriceExtensionFieldNames = null;

//    Can be omitted.
//    protected $MobileAppAdFieldNames = null;

//    Can be omitted.
//    protected $DynamicTextAdFieldNames = null;

//    Can be omitted.
//    protected $TextImageAdFieldNames = null;

//    Can be omitted.
//    protected $MobileAppImageAdFieldNames = null;

//    Can be omitted.
//    protected $TextAdBuilderAdFieldNames = null;

//    Can be omitted.
//    protected $MobileAppAdBuilderAdFieldNames = null;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAdFieldNames = null;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAdFieldNames = null;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAdFieldNames = null;

//    Can be omitted.
//    protected $CpmVideoAdBuilderAdFieldNames = null;

//    Can be omitted.
//    protected $SmartAdBuilderAdFieldNames = null;

    public function getSelectionCriteria(): AdsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(AdsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see AdFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see AdFieldEnum
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

    /**
     * @see TextAdFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdFieldNames(): ?array
    {
        return $this->TextAdFieldNames ?? null;
    }

    /**
     * @see TextAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextAdFieldNames(?array $value = null)
    {
        $this->TextAdFieldNames = $value;

        return $this;
    }

    /**
     * @see TextAdPriceExtensionFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdPriceExtensionFieldNames(): ?array
    {
        return $this->TextAdPriceExtensionFieldNames ?? null;
    }

    /**
     * @see TextAdPriceExtensionFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextAdPriceExtensionFieldNames(?array $value = null)
    {
        $this->TextAdPriceExtensionFieldNames = $value;

        return $this;
    }

    /**
     * @see MobileAppAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppAdFieldNames(): ?array
    {
        return $this->MobileAppAdFieldNames ?? null;
    }

    /**
     * @see MobileAppAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAppAdFieldNames(?array $value = null)
    {
        $this->MobileAppAdFieldNames = $value;

        return $this;
    }

    /**
     * @see DynamicTextAdFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextAdFieldNames(): ?array
    {
        return $this->DynamicTextAdFieldNames ?? null;
    }

    /**
     * @see DynamicTextAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDynamicTextAdFieldNames(?array $value = null)
    {
        $this->DynamicTextAdFieldNames = $value;

        return $this;
    }

    /**
     * @see TextImageAdFieldEnum
     *
     * @return string[]|null
     */
    public function getTextImageAdFieldNames(): ?array
    {
        return $this->TextImageAdFieldNames ?? null;
    }

    /**
     * @see TextImageAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextImageAdFieldNames(?array $value = null)
    {
        $this->TextImageAdFieldNames = $value;

        return $this;
    }

    /**
     * @see MobileAppImageAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppImageAdFieldNames(): ?array
    {
        return $this->MobileAppImageAdFieldNames ?? null;
    }

    /**
     * @see MobileAppImageAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAppImageAdFieldNames(?array $value = null)
    {
        $this->MobileAppImageAdFieldNames = $value;

        return $this;
    }

    /**
     * @see TextAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdBuilderAdFieldNames(): ?array
    {
        return $this->TextAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see TextAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextAdBuilderAdFieldNames(?array $value = null)
    {
        $this->TextAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * @see MobileAppAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppAdBuilderAdFieldNames(): ?array
    {
        return $this->MobileAppAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see MobileAppAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAdFieldNames(?array $value = null)
    {
        $this->MobileAppAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * @see MobileAppCpcVideoAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppCpcVideoAdBuilderAdFieldNames(): ?array
    {
        return $this->MobileAppCpcVideoAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see MobileAppCpcVideoAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAdFieldNames(?array $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * @see CpmBannerAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getCpmBannerAdBuilderAdFieldNames(): ?array
    {
        return $this->CpmBannerAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see CpmBannerAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAdFieldNames(?array $value = null)
    {
        $this->CpmBannerAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * @see CpcVideoAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getCpcVideoAdBuilderAdFieldNames(): ?array
    {
        return $this->CpcVideoAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see CpcVideoAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAdFieldNames(?array $value = null)
    {
        $this->CpcVideoAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * @see CpmVideoAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getCpmVideoAdBuilderAdFieldNames(): ?array
    {
        return $this->CpmVideoAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see CpmVideoAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAdFieldNames(?array $value = null)
    {
        $this->CpmVideoAdBuilderAdFieldNames = $value;

        return $this;
    }

    /**
     * @see SmartAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartAdBuilderAdFieldNames(): ?array
    {
        return $this->SmartAdBuilderAdFieldNames ?? null;
    }

    /**
     * @see SmartAdBuilderAdFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSmartAdBuilderAdFieldNames(?array $value = null)
    {
        $this->SmartAdBuilderAdFieldNames = $value;

        return $this;
    }
}
