<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDynamicTextAdTargetsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $Webpages = null;

    /**
     * Creates a new instance of GetDynamicTextAdTargetsResponse.
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
     * @return WebpageGetItem[]|null
     */
    public function getWebpages()
    {
        return isset($this->Webpages) ? $this->Webpages : null;
    }

    /**
     * Sets Webpages.
     *
     * @param WebpageGetItem[]|null $value
     * @return self
     */
    public function setWebpages(array $value = null)
    {
        $this->Webpages = $value;

        return $this;
    }


}

