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
     * @return self
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
     * @return self
     */
    public function setLimitedBy($value = null)
    {
        $this->LimitedBy = $value;

        return $this;
    }


}

