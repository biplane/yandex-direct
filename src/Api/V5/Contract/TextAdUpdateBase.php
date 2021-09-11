<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdUpdateBase
{
//    Can be omit.
//    protected $VCardId = null;

//    Can be omit.
//    protected $AdImageHash = null;

//    Can be omit.
//    protected $SitelinkSetId = null;

//    Can be omit.
//    protected $CalloutSetting = null;

    /**
     * Creates a new instance of TextAdUpdateBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets VCardId.
     */
    public function getVCardId(): ?int
    {
        return $this->VCardId ?? null;
    }

    /**
     * Sets VCardId.
     *
     * @return $this
     */
    public function setVCardId(?int $value = null)
    {
        $this->VCardId = $value;

        return $this;
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
     * Gets SitelinkSetId.
     */
    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * Sets SitelinkSetId.
     *
     * @return $this
     */
    public function setSitelinkSetId(?int $value = null)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * Gets CalloutSetting.
     */
    public function getCalloutSetting(): ?AdExtensionSetting
    {
        return $this->CalloutSetting ?? null;
    }

    /**
     * Sets CalloutSetting.
     *
     * @return $this
     */
    public function setCalloutSetting(?AdExtensionSetting $value = null)
    {
        $this->CalloutSetting = $value;

        return $this;
    }
}
