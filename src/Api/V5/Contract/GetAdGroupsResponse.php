<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $AdGroups = null;

    /**
     * @return AdGroupGetItem[]|null
     */
    public function getAdGroups(): ?array
    {
        return $this->AdGroups ?? null;
    }

    /**
     * @param AdGroupGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdGroups(?array $value = null)
    {
        $this->AdGroups = $value;

        return $this;
    }
}
