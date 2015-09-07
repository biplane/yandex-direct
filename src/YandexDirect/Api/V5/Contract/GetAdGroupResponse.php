<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupResponse extends GetResponseGeneral
{

    protected $AdGroups = null;

    /**
     * Creates a new instance of GetAdGroupResponse.
     *
     * @return GetAdGroupResponse
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

