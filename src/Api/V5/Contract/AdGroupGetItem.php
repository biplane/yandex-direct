<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupGetItem extends AdGroupBase
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Subtype = null;

//    Can be omit.
//    protected $MobileAppAdGroup = null;

//    Can be omit.
//    protected $DynamicTextAdGroup = null;

//    Can be omit.
//    protected $DynamicTextFeedAdGroup = null;

//    Can be omit.
//    protected $SmartAdGroup = null;

//    Can be omit.
//    protected $ServingStatus = null;

//    Can be omit.
//    protected $RestrictedRegionIds = null;

    /**
     * Creates a new instance of AdGroupGetItem.
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
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

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
     * Gets Type.
     *
     * @see AdGroupTypesEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
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
     * Gets Subtype.
     *
     * @see AdGroupSubtypeEnum
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * Sets Subtype.
     *
     * @see AdGroupSubtypeEnum
     *
     * @return $this
     */
    public function setSubtype(?string $value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     */
    public function getMobileAppAdGroup(): ?MobileAppAdGroupGet
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupGet $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     */
    public function getDynamicTextAdGroup(): ?DynamicTextAdGroupGet
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroupGet $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextFeedAdGroup.
     */
    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroupGet
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * Sets DynamicTextFeedAdGroup.
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroupGet $value = null)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroup.
     */
    public function getSmartAdGroup(): ?SmartAdGroupGet
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * Sets SmartAdGroup.
     *
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupGet $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * Gets ServingStatus.
     *
     * @see ServingStatusEnum
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Sets ServingStatus.
     *
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
     * Gets RestrictedRegionIds.
     *
     * @return float[]|null
     */
    public function getRestrictedRegionIds(): ?array
    {
        return $this->RestrictedRegionIds ?? null;
    }

    /**
     * Sets RestrictedRegionIds.
     *
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setRestrictedRegionIds(?array $value = null)
    {
        $this->RestrictedRegionIds = $value;

        return $this;
    }
}
