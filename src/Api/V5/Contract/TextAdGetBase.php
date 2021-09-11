<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGetBase
{
//    Can be omit.
//    protected $VCardId = null;

//    Can be omit.
//    protected $AdImageHash = null;

//    Can be omit.
//    protected $SitelinkSetId = null;

//    Can be omit.
//    protected $VCardModeration = null;

//    Can be omit.
//    protected $SitelinksModeration = null;

//    Can be omit.
//    protected $AdImageModeration = null;

//    Can be omit.
//    protected $AdExtensions = null;

    /**
     * Creates a new instance of TextAdGetBase.
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
     * Gets VCardModeration.
     */
    public function getVCardModeration(): ?ExtensionModeration
    {
        return $this->VCardModeration ?? null;
    }

    /**
     * Sets VCardModeration.
     *
     * @return $this
     */
    public function setVCardModeration(?ExtensionModeration $value = null)
    {
        $this->VCardModeration = $value;

        return $this;
    }

    /**
     * Gets SitelinksModeration.
     */
    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * Sets SitelinksModeration.
     *
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value = null)
    {
        $this->SitelinksModeration = $value;

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
     * Gets AdExtensions.
     *
     * @return AdExtensionAdGetItem[]|null
     */
    public function getAdExtensions(): ?array
    {
        return $this->AdExtensions ?? null;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionAdGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdExtensions(?array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
