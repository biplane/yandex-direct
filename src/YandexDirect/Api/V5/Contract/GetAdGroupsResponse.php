<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsResponse extends GetResponseGeneral
{

    protected $AdGroups = null;

    /**
     * Creates a new instance of GetAdGroupsResponse.
     *
     * @return GetAdGroupsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdGroups.
     *
     * @return AdGroupGetItem[]|null
     */
    public function getAdGroups()
    {
        return $this->AdGroups;
    }

    /**
     * Sets AdGroups.
     *
     * @param AdGroupGetItem[]|null $value
     * @return $this
     */
    public function setAdGroups(array $value = null)
    {
        $this->AdGroups = $value;

        return $this;
    }


}

