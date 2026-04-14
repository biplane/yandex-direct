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
//    protected $AdImageHash;

    /** @var string */
    protected $Text;

    /** @var string */
    protected $Title;

//    Can be omitted.
//    protected $TrackingUrl;

    /** @var 'DOWNLOAD'|'GET'|'INSTALL'|'MORE'|'OPEN'|'UPDATE'|'PLAY'|'BUY_AUTODETECT' */
    protected $Action;

//    Can be omitted.
//    protected $Features;

//    Can be omitted.
//    protected $AgeLabel;

//    Can be omitted.
//    protected $VideoExtension;

//    Can be omitted.
//    protected $ErirAdDescription;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AdImageHash
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * Set AdImageHash
     *
     * @return $this
     */
    public function setAdImageHash(?string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Get Text
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * Set Text
     *
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Get Title
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * Set Title
     *
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Get TrackingUrl
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * Set TrackingUrl
     *
     * @return $this
     */
    public function setTrackingUrl(?string $value)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * Get Action
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum
     *
     * @return 'DOWNLOAD'|'GET'|'INSTALL'|'MORE'|'OPEN'|'UPDATE'|'PLAY'|'BUY_AUTODETECT'
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Set Action
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum
     *
     * @param 'DOWNLOAD'|'GET'|'INSTALL'|'MORE'|'OPEN'|'UPDATE'|'PLAY'|'BUY_AUTODETECT' $value
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Get Features
     *
     * @return list<MobileAppAdFeatureItem>
     */
    public function getFeatures(): array
    {
        return $this->Features ?? [];
    }

    /**
     * Set Features
     *
     * @param list<MobileAppAdFeatureItem> $value
     *
     * @return $this
     */
    public function setFeatures(array $value)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * Get AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobAppAgeLabelEnum
     *
     * @return 'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * Set AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobAppAgeLabelEnum
     *
     * @param 'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null $value
     *
     * @return $this
     */
    public function setAgeLabel(?string $value)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Get VideoExtension
     */
    public function getVideoExtension(): ?VideoExtensionAddItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Set VideoExtension
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionAddItem $value)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    /**
     * Get ErirAdDescription
     */
    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * Set ErirAdDescription
     *
     * @return $this
     */
    public function setErirAdDescription(?string $value)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
