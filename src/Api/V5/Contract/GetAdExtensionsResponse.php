<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdExtensionsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $AdExtensions = null;

    /**
     * Creates a new instance of GetAdExtensionsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionGetItem[]|null
     */
    public function getAdExtensions(): ?array
    {
        return $this->AdExtensions ?? null;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdExtensions(?array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
