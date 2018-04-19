<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

    /**
     * Creates a new instance of RetargetingListSelectionCriteria.
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
     * @return int[]|null
     */
    public function getIds()
    {
        return isset($this->Ids) ? $this->Ids : null;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }


}

