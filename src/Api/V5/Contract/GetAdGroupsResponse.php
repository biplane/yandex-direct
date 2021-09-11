<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $AdGroups = null;

    /**
     * Creates a new instance of GetAdGroupsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdGroups.
     *
     * @return AdGroupGetItem[]|null
     */
    public function getAdGroups(): ?array
    {
        return $this->AdGroups ?? null;
    }

    /**
     * Sets AdGroups.
     *
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
