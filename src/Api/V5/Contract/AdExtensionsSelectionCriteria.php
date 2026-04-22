<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtensionsSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $Types;

//    Can be omitted.
//    protected $States;

//    Can be omitted.
//    protected $Statuses;

//    Can be omitted.
//    protected $ModifiedSince;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Ids
     *
     * @return list<int>
     */
    public function getIds(): array
    {
        return $this->Ids ?? [];
    }

    /**
     * Set Ids
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Get Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum
     *
     * @return list<'CALLOUT'|'UNKNOWN'>
     */
    public function getTypes(): array
    {
        return $this->Types ?? [];
    }

    /**
     * Set Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum
     *
     * @param list<'CALLOUT'|'UNKNOWN'> $value
     *
     * @return $this
     */
    public function setTypes(array $value)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Get States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionStateSelectionEnum
     *
     * @return list<'ON'|'DELETED'>
     */
    public function getStates(): array
    {
        return $this->States ?? [];
    }

    /**
     * Set States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionStateSelectionEnum
     *
     * @param list<'ON'|'DELETED'> $value
     *
     * @return $this
     */
    public function setStates(array $value)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Get Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @return list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'>
     */
    public function getStatuses(): array
    {
        return $this->Statuses ?? [];
    }

    /**
     * Set Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @param list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setStatuses(array $value)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Get ModifiedSince
     */
    public function getModifiedSince(): ?string
    {
        return $this->ModifiedSince ?? null;
    }

    /**
     * Set ModifiedSince
     *
     * @return $this
     */
    public function setModifiedSince(?string $value)
    {
        $this->ModifiedSince = $value;

        return $this;
    }
}
