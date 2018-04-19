<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetRequestGeneral
{

//    Can be omit.
//    protected $Page = null;

    /**
     * Creates a new instance of GetRequestGeneral.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Page.
     *
     * @return LimitOffset|null
     */
    public function getPage()
    {
        return isset($this->Page) ? $this->Page : null;
    }

    /**
     * Sets Page.
     *
     * @param LimitOffset|null $value
     * @return $this
     */
    public function setPage(LimitOffset $value = null)
    {
        $this->Page = $value;

        return $this;
    }


}

