<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetRetargetingListsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $RetargetingLists = null;

    /**
     * Creates a new instance of GetRetargetingListsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RetargetingLists.
     *
     * @return RetargetingListGetItem[]|null
     */
    public function getRetargetingLists(): ?array
    {
        return $this->RetargetingLists ?? null;
    }

    /**
     * Sets RetargetingLists.
     *
     * @param RetargetingListGetItem[]|null $value
     *
     * @return $this
     */
    public function setRetargetingLists(?array $value = null)
    {
        $this->RetargetingLists = $value;

        return $this;
    }
}
