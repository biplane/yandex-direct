<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGroupGetItem extends AdGroupBase
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $Status = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $Subtype = null;

//    Can be omitted.
//    protected $MobileAppAdGroup = null;

//    Can be omitted.
//    protected $DynamicTextAdGroup = null;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroup = null;

//    Can be omitted.
//    protected $SmartAdGroup = null;

//    Can be omitted.
//    protected $ServingStatus = null;

//    Can be omitted.
//    protected $RestrictedRegionIds = null;

//    Can be omitted.
//    protected $TextAdGroupFeedParams = null;

//    Can be omitted.
//    protected $UnifiedAdGroup = null;

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

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

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
     * @see AdGroupTypesEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see AdGroupTypesEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see AdGroupSubtypeEnum
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * @see AdGroupSubtypeEnum
     *
     * @return $this
     */
    public function setSubtype(?string $value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    public function getMobileAppAdGroup(): ?MobileAppAdGroupGet
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupGet $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    public function getDynamicTextAdGroup(): ?DynamicTextAdGroupGet
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroupGet $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroupGet
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroupGet $value = null)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    public function getSmartAdGroup(): ?SmartAdGroupGet
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupGet $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * @see ServingStatusEnum
     *
     * @return $this
     */
    public function setServingStatus(?string $value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getRestrictedRegionIds(): ?array
    {
        return $this->RestrictedRegionIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setRestrictedRegionIds(?array $value = null)
    {
        $this->RestrictedRegionIds = $value;

        return $this;
    }

    public function getTextAdGroupFeedParams(): ?TextAdGroupFeedParamsGet
    {
        return $this->TextAdGroupFeedParams ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAdGroupFeedParams(?TextAdGroupFeedParamsGet $value = null)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }

    public function getUnifiedAdGroup(): ?UnifiedAdGroupGet
    {
        return $this->UnifiedAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setUnifiedAdGroup(?UnifiedAdGroupGet $value = null)
    {
        $this->UnifiedAdGroup = $value;

        return $this;
    }
}
