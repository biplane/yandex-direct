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
     * Creates a new instance of AddRetargetingListsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RetargetingLists.
     *
     * @return RetargetingListAddItem[]
     */
    public function getRetargetingLists(): array
    {
        return $this->RetargetingLists;
    }

    /**
     * Sets RetargetingLists.
     *
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
