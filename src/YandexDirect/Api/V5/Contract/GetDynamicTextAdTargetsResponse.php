<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDynamicTextAdTargetsResponse extends GetResponseGeneral
{

    protected $Webpages = null;

    /**
     * Creates a new instance of GetDynamicTextAdTargetsResponse.
     *
     * @return GetDynamicTextAdTargetsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Webpages.
     *
     * @return WebpageGetItem[]|null
     */
    public function getWebpages()
    {
        return $this->Webpages;
    }

    /**
     * Sets Webpages.
     *
     * @param WebpageGetItem[]|null $value
     * @return $this
     */
    public function setWebpages(array $value = null)
    {
        $this->Webpages = $value;

        return $this;
    }


}

