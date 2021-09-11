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

//    Can be omit.
//    protected $TextAdFieldNames = null;

//    Can be omit.
//    protected $TextAdPriceExtensionFieldNames = null;

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

//    Can be omit.
//    protected $MobileAppCpcVideoAdBuilderAdFieldNames = null;

//    Can be omit.
//    protected $CpmBannerAdBuilderAdFieldNames = null;

//    Can be omit.
//    protected $CpcVideoAdBuilderAdFieldNames = null;

//    Can be omit.
//    protected $CpmVideoAdBuilderAdFieldNames = null;

//    Can be omit.
//    protected $SmartAdBuilderAdFieldNames = null;

    /**
     * Creates a new instance of GetAdsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): AdsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
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
     * @see AdFieldEnum
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
     * Gets TextAdFieldNames.
     *
     * @see TextAdFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdFieldNames(): ?array
    {
        return $this->TextAdFieldNames ?? null;
    }

    /**
     * Sets TextAdFieldNames.
     *
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
     * Gets TextAdPriceExtensionFieldNames.
     *
     * @see TextAdPriceExtensionFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdPriceExtensionFieldNames(): ?array
    {
        return $this->TextAdPriceExtensionFieldNames ?? null;
    }

    /**
     * Sets TextAdPriceExtensionFieldNames.
     *
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
     * Gets MobileAppAdFieldNames.
     *
     * @see MobileAppAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppAdFieldNames(): ?array
    {
        return $this->MobileAppAdFieldNames ?? null;
    }

    /**
     * Sets MobileAppAdFieldNames.
     *
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
     * Gets DynamicTextAdFieldNames.
     *
     * @see DynamicTextAdFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextAdFieldNames(): ?array
    {
        return $this->DynamicTextAdFieldNames ?? null;
    }

    /**
     * Sets DynamicTextAdFieldNames.
     *
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
     * Gets TextImageAdFieldNames.
     *
     * @see TextImageAdFieldEnum
     *
     * @return string[]|null
     */
    public function getTextImageAdFieldNames(): ?array
    {
        return $this->TextImageAdFieldNames ?? null;
    }

    /**
     * Sets TextImageAdFieldNames.
     *
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
     * Gets MobileAppImageAdFieldNames.
     *
     * @see MobileAppImageAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppImageAdFieldNames(): ?array
    {
        return $this->MobileAppImageAdFieldNames ?? null;
    }

    /**
     * Sets MobileAppImageAdFieldNames.
     *
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
     * Gets TextAdBuilderAdFieldNames.
     *
     * @see TextAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdBuilderAdFieldNames(): ?array
    {
        return $this->TextAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets TextAdBuilderAdFieldNames.
     *
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
     * Gets MobileAppAdBuilderAdFieldNames.
     *
     * @see MobileAppAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppAdBuilderAdFieldNames(): ?array
    {
        return $this->MobileAppAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets MobileAppAdBuilderAdFieldNames.
     *
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
     * Gets MobileAppCpcVideoAdBuilderAdFieldNames.
     *
     * @see MobileAppCpcVideoAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppCpcVideoAdBuilderAdFieldNames(): ?array
    {
        return $this->MobileAppCpcVideoAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets MobileAppCpcVideoAdBuilderAdFieldNames.
     *
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
     * Gets CpmBannerAdBuilderAdFieldNames.
     *
     * @see CpmBannerAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getCpmBannerAdBuilderAdFieldNames(): ?array
    {
        return $this->CpmBannerAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets CpmBannerAdBuilderAdFieldNames.
     *
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
     * Gets CpcVideoAdBuilderAdFieldNames.
     *
     * @see CpcVideoAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getCpcVideoAdBuilderAdFieldNames(): ?array
    {
        return $this->CpcVideoAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets CpcVideoAdBuilderAdFieldNames.
     *
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
     * Gets CpmVideoAdBuilderAdFieldNames.
     *
     * @see CpmVideoAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getCpmVideoAdBuilderAdFieldNames(): ?array
    {
        return $this->CpmVideoAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets CpmVideoAdBuilderAdFieldNames.
     *
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
     * Gets SmartAdBuilderAdFieldNames.
     *
     * @see SmartAdBuilderAdFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartAdBuilderAdFieldNames(): ?array
    {
        return $this->SmartAdBuilderAdFieldNames ?? null;
    }

    /**
     * Sets SmartAdBuilderAdFieldNames.
     *
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
