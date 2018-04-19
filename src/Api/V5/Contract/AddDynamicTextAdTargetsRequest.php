<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddDynamicTextAdTargetsRequest
{

    protected $Webpages = [];

    /**
     * Creates a new instance of AddDynamicTextAdTargetsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Webpages.
     *
     * @return WebpageAddItem[]
     */
    public function getWebpages()
    {
        return $this->Webpages;
    }

    /**
     * Sets Webpages.
     *
     * @param WebpageAddItem[] $value
     * @return $this
     */
    public function setWebpages(array $value)
    {
        $this->Webpages = $value;

        return $this;
    }


}

