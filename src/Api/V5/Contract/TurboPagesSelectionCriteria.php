<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TurboPagesSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $BoundWithHrefs = null;

    /**
     * Creates a new instance of TurboPagesSelectionCriteria.
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
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets BoundWithHrefs.
     *
     * @return string[]|null
     */
    public function getBoundWithHrefs()
    {
        return isset($this->BoundWithHrefs) ? $this->BoundWithHrefs : null;
    }

    /**
     * Sets BoundWithHrefs.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setBoundWithHrefs(array $value = null)
    {
        $this->BoundWithHrefs = $value;

        return $this;
    }


}

