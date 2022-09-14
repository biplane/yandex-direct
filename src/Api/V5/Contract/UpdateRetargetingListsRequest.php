<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UpdateRetargetingListsRequest
{
    protected $RetargetingLists = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return RetargetingListUpdateItem[]
     */
    public function getRetargetingLists(): array
    {
        return $this->RetargetingLists;
    }

    /**
     * @param RetargetingListUpdateItem[] $value
     *
     * @return $this
     */
    public function setRetargetingLists(array $value)
    {
        $this->RetargetingLists = $value;

        return $this;
    }
}
