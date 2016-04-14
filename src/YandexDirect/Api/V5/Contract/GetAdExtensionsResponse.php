<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdExtensionsResponse extends GetResponseGeneral
{

    protected $AdExtensions = null;

    /**
     * Creates a new instance of GetAdExtensionsResponse.
     *
     * @return GetAdExtensionsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionGetItem[]|null
     */
    public function getAdExtensions()
    {
        return $this->AdExtensions;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionGetItem[]|null $value
     * @return $this
     */
    public function setAdExtensions(array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }


}

