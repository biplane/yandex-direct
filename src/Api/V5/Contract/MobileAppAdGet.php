<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdGet extends MobileAppAdBase
{
//    Can be omit.
//    protected $Features = null;

//    Can be omit.
//    protected $AdImageModeration = null;

//    Can be omit.
//    protected $VideoExtension = null;

    /**
     * Creates a new instance of MobileAppAdGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Features.
     *
     * @return MobileAppAdFeatureGetItem[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->Features ?? null;
    }

    /**
     * Sets Features.
     *
     * @param MobileAppAdFeatureGetItem[]|null $value
     *
     * @return $this
     */
    public function setFeatures(?array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * Gets AdImageModeration.
     */
    public function getAdImageModeration(): ?ExtensionModeration
    {
        return $this->AdImageModeration ?? null;
    }

    /**
     * Sets AdImageModeration.
     *
     * @return $this
     */
    public function setAdImageModeration(?ExtensionModeration $value = null)
    {
        $this->AdImageModeration = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     */
    public function getVideoExtension(): ?VideoExtensionGetItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Sets VideoExtension.
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionGetItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }
}
