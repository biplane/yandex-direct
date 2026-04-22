<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdUpdateBase
{
//    Can be omitted.
//    protected $VCardId;

//    Can be omitted.
//    protected $AdImageHash;

//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $CalloutSetting;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get VCardId
     */
    public function getVCardId(): ?int
    {
        return $this->VCardId ?? null;
    }

    /**
     * Set VCardId
     *
     * @return $this
     */
    public function setVCardId(?int $value)
    {
        $this->VCardId = $value;

        return $this;
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
     * Get SitelinkSetId
     */
    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * Set SitelinkSetId
     *
     * @return $this
     */
    public function setSitelinkSetId(?int $value)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * Get CalloutSetting
     */
    public function getCalloutSetting(): ?AdExtensionSetting
    {
        return $this->CalloutSetting ?? null;
    }

    /**
     * Set CalloutSetting
     *
     * @return $this
     */
    public function setCalloutSetting(?AdExtensionSetting $value)
    {
        $this->CalloutSetting = $value;

        return $this;
    }
}
