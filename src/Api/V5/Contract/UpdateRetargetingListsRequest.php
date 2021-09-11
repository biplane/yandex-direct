<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateRetargetingListsRequest
{
    protected $RetargetingLists = [];

    /**
     * Creates a new instance of UpdateRetargetingListsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RetargetingLists.
     *
     * @return RetargetingListUpdateItem[]
     */
    public function getRetargetingLists(): array
    {
        return $this->RetargetingLists;
    }

    /**
     * Sets RetargetingLists.
     *
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
