<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRetargetingListsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $RetargetingLists = null;

    /**
     * @return RetargetingListGetItem[]|null
     */
    public function getRetargetingLists(): ?array
    {
        return $this->RetargetingLists ?? null;
    }

    /**
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
