<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtension extends AdExtensionBase
{
//    Can be omit.
//    protected $AdExtensionId = null;

    /**
     * Creates a new instance of AdExtension.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdExtensionId.
     */
    public function getAdExtensionId(): ?int
    {
        return $this->AdExtensionId ?? null;
    }

    /**
     * Sets AdExtensionId.
     *
     * @return $this
     */
    public function setAdExtensionId(?int $value = null)
    {
        $this->AdExtensionId = $value;

        return $this;
    }
}
