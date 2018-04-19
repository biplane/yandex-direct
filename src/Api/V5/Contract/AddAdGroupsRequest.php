<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdGroupsRequest
{

    protected $AdGroups = [];

    /**
     * Creates a new instance of AddAdGroupsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdGroups.
     *
     * @return AdGroupAddItem[]
     */
    public function getAdGroups()
    {
        return $this->AdGroups;
    }

    /**
     * Sets AdGroups.
     *
     * @param AdGroupAddItem[] $value
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }


}

