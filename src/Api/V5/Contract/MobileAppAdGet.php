<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdGet extends MobileAppAdBase
{
//    Can be omitted.
//    protected $Features = null;

//    Can be omitted.
//    protected $AdImageModeration = null;

//    Can be omitted.
//    protected $VideoExtension = null;

//    Can be omitted.
//    protected $AutogeneratedErirAdDescription = null;

    /**
     * @return MobileAppAdFeatureGetItem[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->Features ?? null;
    }

    /**
     * @param MobileAppAdFeatureGetItem[]|null $value
     *
     * @return $this
     */
    public function setFeatures(?array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    public function getAdImageModeration(): ?ExtensionModeration
    {
        return $this->AdImageModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setAdImageModeration(?ExtensionModeration $value = null)
    {
        $this->AdImageModeration = $value;

        return $this;
    }

    public function getVideoExtension(): ?VideoExtensionGetItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionGetItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    public function getAutogeneratedErirAdDescription(): ?string
    {
        return $this->AutogeneratedErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setAutogeneratedErirAdDescription(?string $value = null)
    {
        $this->AutogeneratedErirAdDescription = $value;

        return $this;
    }
}
