<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGetItem
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $Status = null;

//    Can be omitted.
//    protected $State = null;

//    Can be omitted.
//    protected $StatusClarification = null;

//    Can be omitted.
//    protected $AdCategories = null;

//    Can be omitted.
//    protected $AgeLabel = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $Subtype = null;

//    Can be omitted.
//    protected $TextAd = null;

//    Can be omitted.
//    protected $DynamicTextAd = null;

//    Can be omitted.
//    protected $MobileAppAd = null;

//    Can be omitted.
//    protected $TextImageAd = null;

//    Can be omitted.
//    protected $MobileAppImageAd = null;

//    Can be omitted.
//    protected $TextAdBuilderAd = null;

//    Can be omitted.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAd = null;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $CpmVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $SmartAdBuilderAd = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * @see StateEnum
     *
     * @return $this
     */
    public function setState(?string $value = null)
    {
        $this->State = $value;

        return $this;
    }

    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAdCategories(): ?array
    {
        return $this->AdCategories ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdCategories(?array $value = null)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * @see AgeLabelEnum
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * @see AgeLabelEnum
     *
     * @return $this
     */
    public function setAgeLabel(?string $value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * @see AdTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see AdTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see AdSubtypeEnum
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * @see AdSubtypeEnum
     *
     * @return $this
     */
    public function setSubtype(?string $value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    public function getTextAd(): ?TextAdGet
    {
        return $this->TextAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAd(?TextAdGet $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    public function getDynamicTextAd(): ?DynamicTextAdGet
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdGet $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    public function getMobileAppAd(): ?MobileAppAdGet
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdGet $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    public function getTextImageAd(): ?TextImageAdGet
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextImageAd(?TextImageAdGet $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    public function getMobileAppImageAd(): ?MobileAppImageAdGet
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdGet $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    public function getTextAdBuilderAd(): ?TextAdBuilderAdGet
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdGet $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdGet
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdGet $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdGet
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdGet $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdGet
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdGet $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdGet
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdGet $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdGet
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdGet $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdGet
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdGet $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }
}
