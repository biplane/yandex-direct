<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdGetBase
{
//    Can be omitted.
//    protected $VCardId;

//    Can be omitted.
//    protected $AdImageHash;

//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $VCardModeration;

//    Can be omitted.
//    protected $SitelinksModeration;

//    Can be omitted.
//    protected $AdImageModeration;

//    Can be omitted.
//    protected $AdExtensions;

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
     * Get VCardModeration
     */
    public function getVCardModeration(): ?ExtensionModeration
    {
        return $this->VCardModeration ?? null;
    }

    /**
     * Set VCardModeration
     *
     * @return $this
     */
    public function setVCardModeration(?ExtensionModeration $value)
    {
        $this->VCardModeration = $value;

        return $this;
    }

    /**
     * Get SitelinksModeration
     */
    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * Set SitelinksModeration
     *
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value)
    {
        $this->SitelinksModeration = $value;

        return $this;
    }

    /**
     * Get AdImageModeration
     */
    public function getAdImageModeration(): ?ExtensionModeration
    {
        return $this->AdImageModeration ?? null;
    }

    /**
     * Set AdImageModeration
     *
     * @return $this
     */
    public function setAdImageModeration(?ExtensionModeration $value)
    {
        $this->AdImageModeration = $value;

        return $this;
    }

    /**
     * Get AdExtensions
     *
     * @return list<AdExtensionAdGetItem>
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions ?? [];
    }

    /**
     * Set AdExtensions
     *
     * @param list<AdExtensionAdGetItem> $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
