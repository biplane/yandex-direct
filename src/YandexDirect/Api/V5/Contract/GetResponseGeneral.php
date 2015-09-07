<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetResponseGeneral
{

    protected $LimitedBy = null;

    /**
     * Creates a new instance of GetResponseGeneral.
     *
     * @return GetResponseGeneral
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets LimitedBy.
     *
     * @return int|null
     */
    public function getLimitedBy()
    {
        return $this->LimitedBy;
    }

    /**
     * Sets LimitedBy.
     *
     * @param int|null $value
     * @return $this
     */
    public function setLimitedBy($value = null)
    {
        $this->LimitedBy = $value;

        return $this;
    }


}

