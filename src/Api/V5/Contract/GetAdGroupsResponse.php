<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $AdGroups = null;

    /**
     * Creates a new instance of GetAdGroupsResponse.
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
     * @return AdGroupGetItem[]|null
     */
    public function getAdGroups()
    {
        return isset($this->AdGroups) ? $this->AdGroups : null;
    }

    /**
     * Sets AdGroups.
     *
     * @param AdGroupGetItem[]|null $value
     * @return self
     */
    public function setAdGroups(array $value = null)
    {
        $this->AdGroups = $value;

        return $this;
    }


}

