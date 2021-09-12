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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdExtensionAddItem[]
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions;
    }

    /**
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
