<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdGroupsRequest
{

    protected $AdGroups = [];

    /**
     * Creates a new instance of UpdateAdGroupsRequest.
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
     * @return AdGroupUpdateItem[]
     */
    public function getAdGroups()
    {
        return $this->AdGroups;
    }

    /**
     * Sets AdGroups.
     *
     * @param AdGroupUpdateItem[] $value
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }


}

