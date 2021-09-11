<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdUpdate extends MobileAppAdBase
{
//    Can be omit.
//    protected $Features = null;

//    Can be omit.
//    protected $AgeLabel = null;

//    Can be omit.
//    protected $VideoExtension = null;

    /**
     * Creates a new instance of MobileAppAdUpdate.
     */
    public static function create(): self
    {
        return new self();
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
    public function getVideoExtension(): ?VideoExtensionUpdateItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Sets VideoExtension.
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionUpdateItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }
}
