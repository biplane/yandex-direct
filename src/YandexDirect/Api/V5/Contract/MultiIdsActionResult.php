<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MultiIdsActionResult extends ActionResultBase
{

    protected $Ids = null;

    /**
     * Creates a new instance of MultiIdsActionResult.
     *
     * @return MultiIdsActionResult
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return long[]|null
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }


}

