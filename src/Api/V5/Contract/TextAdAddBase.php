<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdAddBase
{
//    Can be omitted.
//    protected $VCardId = null;

//    Can be omitted.
//    protected $AdImageHash = null;

//    Can be omitted.
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $AdExtensionIds = null;

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

    /**
     * @return int[]|null
     */
    public function getAdExtensionIds(): ?array
    {
        return $this->AdExtensionIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdExtensionIds(?array $value = null)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }
}
