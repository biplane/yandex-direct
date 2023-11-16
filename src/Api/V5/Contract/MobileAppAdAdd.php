<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdAdd
{
//    Can be omitted.
//    protected $AdImageHash = null;

    protected $Text = null;

    protected $Title = null;

//    Can be omitted.
//    protected $TrackingUrl = null;

    protected $Action = null;

//    Can be omitted.
//    protected $Features = null;

//    Can be omitted.
//    protected $AgeLabel = null;

//    Can be omitted.
//    protected $VideoExtension = null;

//    Can be omitted.
//    protected $ErirAdDescription = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setTrackingUrl(?string $value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * @see MobileAppAdActionEnum
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * @see MobileAppAdActionEnum
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * @return MobileAppAdFeatureItem[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->Features ?? null;
    }

    /**
     * @param MobileAppAdFeatureItem[]|null $value
     *
     * @return $this
     */
    public function setFeatures(?array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * @see MobAppAgeLabelEnum
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * @see MobAppAgeLabelEnum
     *
     * @return $this
     */
    public function setAgeLabel(?string $value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    public function getVideoExtension(): ?VideoExtensionAddItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionAddItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAdDescription(?string $value = null)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
