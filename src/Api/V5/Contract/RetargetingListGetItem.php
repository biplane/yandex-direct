<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListGetItem extends RetargetingListBase
{
//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $IsAvailable = null;

//    Can be omitted.
//    protected $Scope = null;

//    Can be omitted.
//    protected $AvailableForTargetsInAdGroupTypes = null;

    /**
     * @see RetargetingListTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see RetargetingListTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getIsAvailable(): ?string
    {
        return $this->IsAvailable ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setIsAvailable(?string $value = null)
    {
        $this->IsAvailable = $value;

        return $this;
    }

    /**
     * @see RetargetingListScopeEnum
     */
    public function getScope(): ?string
    {
        return $this->Scope ?? null;
    }

    /**
     * @see RetargetingListScopeEnum
     *
     * @return $this
     */
    public function setScope(?string $value = null)
    {
        $this->Scope = $value;

        return $this;
    }

    public function getAvailableForTargetsInAdGroupTypes(): ?AvailableForTargetsInAdGroupTypesArray
    {
        return $this->AvailableForTargetsInAdGroupTypes ?? null;
    }

    /**
     * @return $this
     */
    public function setAvailableForTargetsInAdGroupTypes(?AvailableForTargetsInAdGroupTypesArray $value = null)
    {
        $this->AvailableForTargetsInAdGroupTypes = $value;

        return $this;
    }
}
