<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdExtensionsRequest
{

    protected $AdExtensions = [];

    /**
     * Creates a new instance of AddAdExtensionsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionAddItem[]
     */
    public function getAdExtensions()
    {
        return $this->AdExtensions;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionAddItem[] $value
     * @return self
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }


}

