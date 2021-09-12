<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddRetargetingListsRequest
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
     * @return RetargetingListAddItem[]
     */
    public function getRetargetingLists(): array
    {
        return $this->RetargetingLists;
    }

    /**
     * @param RetargetingListAddItem[] $value
     *
     * @return $this
     */
    public function setRetargetingLists(array $value)
    {
        $this->RetargetingLists = $value;

        return $this;
    }
}
