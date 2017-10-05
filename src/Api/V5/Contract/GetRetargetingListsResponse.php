<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetRetargetingListsResponse extends GetResponseGeneral
{

    protected $RetargetingLists = null;

    /**
     * Creates a new instance of GetRetargetingListsResponse.
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
     * @return RetargetingListGetItem[]|null
     */
    public function getRetargetingLists()
    {
        return $this->RetargetingLists;
    }

    /**
     * Sets RetargetingLists.
     *
     * @param RetargetingListGetItem[]|null $value
     * @return self
     */
    public function setRetargetingLists(array $value = null)
    {
        $this->RetargetingLists = $value;

        return $this;
    }


}

