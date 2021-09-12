<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGetBase
{
//    Can be omitted.
//    protected $VCardId = null;

//    Can be omitted.
//    protected $AdImageHash = null;

//    Can be omitted.
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $VCardModeration = null;

//    Can be omitted.
//    protected $SitelinksModeration = null;

//    Can be omitted.
//    protected $AdImageModeration = null;

//    Can be omitted.
//    protected $AdExtensions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getVCardId(): ?int
    {
        return $this->VCardId ?? null;
    }

    /**
     * @return $this
     */
    public function setVCardId(?int $value = null)
    {
        $this->VCardId = $value;

        return $this;
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinkSetId(?int $value = null)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    public function getVCardModeration(): ?ExtensionModeration
    {
        return $this->VCardModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setVCardModeration(?ExtensionModeration $value = null)
    {
        $this->VCardModeration = $value;

        return $this;
    }

    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value = null)
    {
        $this->SitelinksModeration = $value;

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

    /**
     * @return AdExtensionAdGetItem[]|null
     */
    public function getAdExtensions(): ?array
    {
        return $this->AdExtensions ?? null;
    }

    /**
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
