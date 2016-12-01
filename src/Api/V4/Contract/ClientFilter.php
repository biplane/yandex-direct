<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientFilter
{

    protected $StatusArch = null;

    /**
     * Creates a new instance of ClientFilter.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets StatusArch.
     *
     * @return string|null
     */
    public function getStatusArch()
    {
        return $this->StatusArch;
    }

    /**
     * Sets StatusArch.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusArch($value = null)
    {
        $this->StatusArch = $value;

        return $this;
    }


}

