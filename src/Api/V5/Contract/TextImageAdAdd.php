<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextImageAdAdd extends ImageAdAddBase
{

    protected $Href = null;

    /**
     * Creates a new instance of TextImageAdAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Href.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @param string $value
     * @return self
     */
    public function setHref($value)
    {
        $this->Href = $value;

        return $this;
    }


}

