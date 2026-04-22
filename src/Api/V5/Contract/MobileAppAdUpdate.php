<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdUpdate extends MobileAppAdBase
{
//    Can be omitted.
//    protected $Features;

//    Can be omitted.
//    protected $AgeLabel;

//    Can be omitted.
//    protected $VideoExtension;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
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
    public function getVideoExtension(): ?VideoExtensionUpdateItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Set VideoExtension
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionUpdateItem $value)
    {
        $this->VideoExtension = $value;

        return $this;
    }
}
