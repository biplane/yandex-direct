<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdBuilderAdAdd extends AdBuilderAdAddBase
{

    protected $Href = null;

    /**
     * Creates a new instance of TextAdBuilderAdAdd.
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
     * @return $this
     */
    public function setHref($value)
    {
        $this->Href = $value;

        return $this;
    }


}

