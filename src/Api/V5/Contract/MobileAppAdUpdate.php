<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdUpdate extends MobileAppAdBase
{
//    Can be omitted.
//    protected $Features = null;

//    Can be omitted.
//    protected $AgeLabel = null;

//    Can be omitted.
//    protected $VideoExtension = null;

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

    public function getVideoExtension(): ?VideoExtensionUpdateItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionUpdateItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }
}
