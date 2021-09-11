<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdAdd
{
//    Can be omit.
//    protected $AdImageHash = null;

    protected $Text = null;

    protected $Title = null;

//    Can be omit.
//    protected $TrackingUrl = null;

    protected $Action = null;

//    Can be omit.
//    protected $Features = null;

//    Can be omit.
//    protected $AgeLabel = null;

//    Can be omit.
//    protected $VideoExtension = null;

    /**
     * Creates a new instance of MobileAppAdAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImageHash.
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets Text.
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * Sets Text.
     *
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets Title.
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets TrackingUrl.
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * Sets TrackingUrl.
     *
     * @return $this
     */
    public function setTrackingUrl(?string $value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * Gets Action.
     *
     * @see MobileAppAdActionEnum
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
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
     * Gets Features.
     *
     * @return MobileAppAdFeatureItem[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->Features ?? null;
    }

    /**
     * Sets Features.
     *
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
     * Gets AgeLabel.
     *
     * @see MobAppAgeLabelEnum
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * Sets AgeLabel.
     *
     * @see MobAppAgeLabelEnum
     *
     * @return $this
     */
    public function setAgeLabel(?string $value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     */
    public function getVideoExtension(): ?VideoExtensionAddItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Sets VideoExtension.
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionAddItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }
}
