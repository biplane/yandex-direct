<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListSelectionCriteria
{

//    Can be omit.
//    protected $Types = null;

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
     * Gets Types.
     *
     * @return string[]|null
     * @see RetargetingListTypeEnum
     */
    public function getTypes()
    {
        return isset($this->Types) ? $this->Types : null;
    }

    /**
     * Sets Types.
     *
     * @param string[]|null $value
     * @return $this
     * @see RetargetingListTypeEnum
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
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
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }


}

