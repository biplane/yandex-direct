<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGetItem
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $StatusClarification = null;

//    Can be omit.
//    protected $AdCategories = null;

//    Can be omit.
//    protected $AgeLabel = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Subtype = null;

//    Can be omit.
//    protected $TextAd = null;

//    Can be omit.
//    protected $DynamicTextAd = null;

//    Can be omit.
//    protected $MobileAppAd = null;

//    Can be omit.
//    protected $TextImageAd = null;

//    Can be omit.
//    protected $MobileAppImageAd = null;

//    Can be omit.
//    protected $TextAdBuilderAd = null;

//    Can be omit.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omit.
//    protected $MobileAppCpcVideoAdBuilderAd = null;

//    Can be omit.
//    protected $CpmBannerAdBuilderAd = null;

//    Can be omit.
//    protected $CpcVideoAdBuilderAd = null;

//    Can be omit.
//    protected $CpmVideoAdBuilderAd = null;

//    Can be omit.
//    protected $SmartAdBuilderAd = null;

    /**
     * Creates a new instance of AdGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Sets Status.
     *
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
     * Gets State.
     *
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Sets State.
     *
     * @see StateEnum
     *
     * @return $this
     */
    public function setState(?string $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Sets StatusClarification.
     *
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets AdCategories.
     *
     * @return string[]|null
     */
    public function getAdCategories(): ?array
    {
        return $this->AdCategories ?? null;
    }

    /**
     * Sets AdCategories.
     *
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
     * Gets AgeLabel.
     *
     * @see AgeLabelEnum
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * Sets AgeLabel.
     *
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
     * Gets Type.
     *
     * @see AdTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
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
     * Gets Subtype.
     *
     * @see AdSubtypeEnum
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * Sets Subtype.
     *
     * @see AdSubtypeEnum
     *
     * @return $this
     */
    public function setSubtype(?string $value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Gets TextAd.
     */
    public function getTextAd(): ?TextAdGet
    {
        return $this->TextAd ?? null;
    }

    /**
     * Sets TextAd.
     *
     * @return $this
     */
    public function setTextAd(?TextAdGet $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAd.
     */
    public function getDynamicTextAd(): ?DynamicTextAdGet
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdGet $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAd.
     */
    public function getMobileAppAd(): ?MobileAppAdGet
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * Sets MobileAppAd.
     *
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdGet $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Gets TextImageAd.
     */
    public function getTextImageAd(): ?TextImageAdGet
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * Sets TextImageAd.
     *
     * @return $this
     */
    public function setTextImageAd(?TextImageAdGet $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAd.
     */
    public function getMobileAppImageAd(): ?MobileAppImageAdGet
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdGet $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAd.
     */
    public function getTextAdBuilderAd(): ?TextAdBuilderAdGet
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdGet $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAd.
     */
    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdGet
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdGet $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppCpcVideoAdBuilderAd.
     */
    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdGet
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * Sets MobileAppCpcVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdGet $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmBannerAdBuilderAd.
     */
    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdGet
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * Sets CpmBannerAdBuilderAd.
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdGet $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpcVideoAdBuilderAd.
     */
    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdGet
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * Sets CpcVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdGet $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmVideoAdBuilderAd.
     */
    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdGet
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * Sets CpmVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdGet $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets SmartAdBuilderAd.
     */
    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdGet
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * Sets SmartAdBuilderAd.
     *
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdGet $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }
}
