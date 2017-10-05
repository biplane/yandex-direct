<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateRetargetingListsRequest
{

    protected $RetargetingLists = [];

    /**
     * Creates a new instance of UpdateRetargetingListsRequest.
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
     * @return RetargetingListUpdateItem[]
     */
    public function getRetargetingLists()
    {
        return $this->RetargetingLists;
    }

    /**
     * Sets RetargetingLists.
     *
     * @param RetargetingListUpdateItem[] $value
     * @return self
     */
    public function setRetargetingLists(array $value)
    {
        $this->RetargetingLists = $value;

        return $this;
    }


}

