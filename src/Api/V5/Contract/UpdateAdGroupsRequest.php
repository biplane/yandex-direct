<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdGroupsRequest
{
    protected $AdGroups = [];

    /**
     * Creates a new instance of UpdateAdGroupsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdGroups.
     *
     * @return AdGroupUpdateItem[]
     */
    public function getAdGroups(): array
    {
        return $this->AdGroups;
    }

    /**
     * Sets AdGroups.
     *
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
