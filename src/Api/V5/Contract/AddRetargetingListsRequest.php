<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddRetargetingListsRequest
{

    protected $RetargetingLists = [];

    /**
     * Creates a new instance of AddRetargetingListsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RetargetingLists.
     *
     * @return RetargetingListAddItem[]
     */
    public function getRetargetingLists()
    {
        return $this->RetargetingLists;
    }

    /**
     * Sets RetargetingLists.
     *
     * @param RetargetingListAddItem[] $value
     * @return $this
     */
    public function setRetargetingLists(array $value)
    {
        $this->RetargetingLists = $value;

        return $this;
    }


}

