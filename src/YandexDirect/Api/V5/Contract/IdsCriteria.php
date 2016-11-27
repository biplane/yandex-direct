<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class IdsCriteria
{

    protected $Ids = [];

    /**
     * Creates a new instance of IdsCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param int[] $value
     * @return self
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }


}

