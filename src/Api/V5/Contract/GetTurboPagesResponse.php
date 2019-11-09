<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetTurboPagesResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $TurboPages = null;

    /**
     * Creates a new instance of GetTurboPagesResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TurboPages.
     *
     * @return TurboPageGetItem[]|null
     */
    public function getTurboPages()
    {
        return isset($this->TurboPages) ? $this->TurboPages : null;
    }

    /**
     * Sets TurboPages.
     *
     * @param TurboPageGetItem[]|null $value
     * @return $this
     */
    public function setTurboPages(array $value = null)
    {
        $this->TurboPages = $value;

        return $this;
    }


}

