<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdGroupsRequest
{
    protected $AdGroups = [];

    /**
     * Creates a new instance of AddAdGroupsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdGroups.
     *
     * @return AdGroupAddItem[]
     */
    public function getAdGroups(): array
    {
        return $this->AdGroups;
    }

    /**
     * Sets AdGroups.
     *
     * @param AdGroupAddItem[] $value
     *
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }
}
