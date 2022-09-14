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
//    protected $Ids = null;

//    Can be omitted.
//    protected $Types = null;

//    Can be omitted.
//    protected $States = null;

//    Can be omitted.
//    protected $Statuses = null;

//    Can be omitted.
//    protected $ModifiedSince = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @see AdExtensionTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * @see AdExtensionTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTypes(?array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * @see AdExtensionStateSelectionEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
     * @see AdExtensionStateSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStates(?array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatuses(?array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    public function getModifiedSince(): ?string
    {
        return $this->ModifiedSince ?? null;
    }

    /**
     * @return $this
     */
    public function setModifiedSince(?string $value = null)
    {
        $this->ModifiedSince = $value;

        return $this;
    }
}
