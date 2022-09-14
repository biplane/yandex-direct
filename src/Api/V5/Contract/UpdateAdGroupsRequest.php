<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UpdateAdGroupsRequest
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
     * @return AdGroupUpdateItem[]
     */
    public function getAdGroups(): array
    {
        return $this->AdGroups;
    }

    /**
     * @param AdGroupUpdateItem[] $value
     *
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }
}
