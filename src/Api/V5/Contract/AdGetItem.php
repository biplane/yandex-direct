<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGetItem
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $Status;

//    Can be omitted.
//    protected $State;

//    Can be omitted.
//    protected $StatusClarification;

//    Can be omitted.
//    protected $AdCategories;

//    Can be omitted.
//    protected $AgeLabel;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $Subtype;

//    Can be omitted.
//    protected $TextAd;

//    Can be omitted.
//    protected $DynamicTextAd;

//    Can be omitted.
//    protected $MobileAppAd;

//    Can be omitted.
//    protected $TextImageAd;

//    Can be omitted.
//    protected $MobileAppImageAd;

//    Can be omitted.
//    protected $TextAdBuilderAd;

//    Can be omitted.
//    protected $MobileAppAdBuilderAd;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAd;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAd;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAd;

//    Can be omitted.
//    protected $CpmVideoAdBuilderAd;

//    Can be omitted.
//    protected $SmartAdBuilderAd;

//    Can be omitted.
//    protected $ShoppingAd;

//    Can be omitted.
//    protected $ListingAd;

//    Can be omitted.
//    protected $ResponsiveAd;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get CampaignId
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(?int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get AdGroupId
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Set AdGroupId
     *
     * @return $this
     */
    public function setAdGroupId(?int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @return 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Set State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @param 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setState(?string $value)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Get StatusClarification
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Set StatusClarification
     *
     * @return $this
     */
    public function setStatusClarification(?string $value)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Get AdCategories
     */
    public function getAdCategories(): ?ArrayOfAdCategoryEnum
    {
        return $this->AdCategories ?? null;
    }

    /**
     * Set AdCategories
     *
     * @return $this
     */
    public function setAdCategories(?ArrayOfAdCategoryEnum $value)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * Get AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum
     *
     * @return 'MONTHS_0'|'MONTHS_1'|'MONTHS_2'|'MONTHS_3'|'MONTHS_4'|'MONTHS_5'|'MONTHS_6'|'MONTHS_7'|'MONTHS_8'|'MONTHS_9'|'MONTHS_10'|'MONTHS_11'|'MONTHS_12'|'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * Set AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum
     *
     * @param 'MONTHS_0'|'MONTHS_1'|'MONTHS_2'|'MONTHS_3'|'MONTHS_4'|'MONTHS_5'|'MONTHS_6'|'MONTHS_7'|'MONTHS_8'|'MONTHS_9'|'MONTHS_10'|'MONTHS_11'|'MONTHS_12'|'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null $value
     *
     * @return $this
     */
    public function setAgeLabel(?string $value)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum
     *
     * @return 'TEXT_AD'|'MOBILE_APP_AD'|'DYNAMIC_TEXT_AD'|'IMAGE_AD'|'CPC_VIDEO_AD'|'CPM_BANNER_AD'|'CPM_VIDEO_AD'|'SMART_AD'|'SHOPPING_AD'|'LISTING_AD'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum
     *
     * @param 'TEXT_AD'|'MOBILE_APP_AD'|'DYNAMIC_TEXT_AD'|'IMAGE_AD'|'CPC_VIDEO_AD'|'CPM_BANNER_AD'|'CPM_VIDEO_AD'|'SMART_AD'|'SHOPPING_AD'|'LISTING_AD'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Subtype
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdSubtypeEnum
     *
     * @return 'MOBILE_APP_AD_BUILDER_AD'|'MOBILE_APP_IMAGE_AD'|'MOBILE_APP_CPC_VIDEO_AD_BUILDER_AD'|'NONE'|'TEXT_AD_BUILDER_AD'|'TEXT_IMAGE_AD'|null
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * Set Subtype
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdSubtypeEnum
     *
     * @param 'MOBILE_APP_AD_BUILDER_AD'|'MOBILE_APP_IMAGE_AD'|'MOBILE_APP_CPC_VIDEO_AD_BUILDER_AD'|'NONE'|'TEXT_AD_BUILDER_AD'|'TEXT_IMAGE_AD'|null $value
     *
     * @return $this
     */
    public function setSubtype(?string $value)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Get TextAd
     */
    public function getTextAd(): ?TextAdGet
    {
        return $this->TextAd ?? null;
    }

    /**
     * Set TextAd
     *
     * @return $this
     */
    public function setTextAd(?TextAdGet $value)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Get DynamicTextAd
     */
    public function getDynamicTextAd(): ?DynamicTextAdGet
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * Set DynamicTextAd
     *
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdGet $value)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Get MobileAppAd
     */
    public function getMobileAppAd(): ?MobileAppAdGet
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * Set MobileAppAd
     *
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdGet $value)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Get TextImageAd
     */
    public function getTextImageAd(): ?TextImageAdGet
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * Set TextImageAd
     *
     * @return $this
     */
    public function setTextImageAd(?TextImageAdGet $value)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Get MobileAppImageAd
     */
    public function getMobileAppImageAd(): ?MobileAppImageAdGet
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * Set MobileAppImageAd
     *
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdGet $value)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Get TextAdBuilderAd
     */
    public function getTextAdBuilderAd(): ?TextAdBuilderAdGet
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * Set TextAdBuilderAd
     *
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdGet $value)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get MobileAppAdBuilderAd
     */
    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdGet
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * Set MobileAppAdBuilderAd
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdGet $value)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get MobileAppCpcVideoAdBuilderAd
     */
    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdGet
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * Set MobileAppCpcVideoAdBuilderAd
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdGet $value)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpmBannerAdBuilderAd
     */
    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdGet
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * Set CpmBannerAdBuilderAd
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdGet $value)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpcVideoAdBuilderAd
     */
    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdGet
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * Set CpcVideoAdBuilderAd
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdGet $value)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpmVideoAdBuilderAd
     */
    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdGet
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * Set CpmVideoAdBuilderAd
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdGet $value)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get SmartAdBuilderAd
     */
    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdGet
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * Set SmartAdBuilderAd
     *
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdGet $value)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get ShoppingAd
     */
    public function getShoppingAd(): ?ShoppingAdGet
    {
        return $this->ShoppingAd ?? null;
    }

    /**
     * Set ShoppingAd
     *
     * @return $this
     */
    public function setShoppingAd(?ShoppingAdGet $value)
    {
        $this->ShoppingAd = $value;

        return $this;
    }

    /**
     * Get ListingAd
     */
    public function getListingAd(): ?ListingAdGet
    {
        return $this->ListingAd ?? null;
    }

    /**
     * Set ListingAd
     *
     * @return $this
     */
    public function setListingAd(?ListingAdGet $value)
    {
        $this->ListingAd = $value;

        return $this;
    }

    /**
     * Get ResponsiveAd
     */
    public function getResponsiveAd(): ?ResponsiveAdGet
    {
        return $this->ResponsiveAd ?? null;
    }

    /**
     * Set ResponsiveAd
     *
     * @return $this
     */
    public function setResponsiveAd(?ResponsiveAdGet $value)
    {
        $this->ResponsiveAd = $value;

        return $this;
    }
}
