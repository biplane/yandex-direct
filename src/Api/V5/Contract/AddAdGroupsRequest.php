<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddAdGroupsRequest
{
    protected $AdGroups = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdGroupAddItem[]
     */
    public function getAdGroups(): array
    {
        return $this->AdGroups;
    }

    /**
     * @param AdGroupAddItem[] $value
     *
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }
}
