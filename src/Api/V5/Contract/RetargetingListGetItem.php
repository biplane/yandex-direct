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
//    protected $Type;

//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $IsAvailable;

//    Can be omitted.
//    protected $Scope;

//    Can be omitted.
//    protected $AvailableForTargetsInAdGroupTypes;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListTypeEnum
     *
     * @return 'RETARGETING'|'AUDIENCE'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListTypeEnum
     *
     * @param 'RETARGETING'|'AUDIENCE'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get IsAvailable
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getIsAvailable(): ?string
    {
        return $this->IsAvailable ?? null;
    }

    /**
     * Set IsAvailable
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setIsAvailable(?string $value)
    {
        $this->IsAvailable = $value;

        return $this;
    }

    /**
     * Get Scope
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListScopeEnum
     *
     * @return 'FOR_TARGETS_AND_ADJUSTMENTS'|'FOR_ADJUSTMENTS_ONLY'|'FOR_TARGETS_ONLY'|null
     */
    public function getScope(): ?string
    {
        return $this->Scope ?? null;
    }

    /**
     * Set Scope
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListScopeEnum
     *
     * @param 'FOR_TARGETS_AND_ADJUSTMENTS'|'FOR_ADJUSTMENTS_ONLY'|'FOR_TARGETS_ONLY'|null $value
     *
     * @return $this
     */
    public function setScope(?string $value)
    {
        $this->Scope = $value;

        return $this;
    }

    /**
     * Get AvailableForTargetsInAdGroupTypes
     */
    public function getAvailableForTargetsInAdGroupTypes(): ?AvailableForTargetsInAdGroupTypesArray
    {
        return $this->AvailableForTargetsInAdGroupTypes ?? null;
    }

    /**
     * Set AvailableForTargetsInAdGroupTypes
     *
     * @return $this
     */
    public function setAvailableForTargetsInAdGroupTypes(?AvailableForTargetsInAdGroupTypesArray $value)
    {
        $this->AvailableForTargetsInAdGroupTypes = $value;

        return $this;
    }
}
