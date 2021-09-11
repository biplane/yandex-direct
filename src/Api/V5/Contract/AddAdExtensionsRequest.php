<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdExtensionsRequest
{
    protected $AdExtensions = [];

    /**
     * Creates a new instance of AddAdExtensionsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionAddItem[]
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionAddItem[] $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
