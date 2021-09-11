<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListGetItem extends RetargetingListBase
{
//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $IsAvailable = null;

//    Can be omit.
//    protected $Scope = null;

//    Can be omit.
//    protected $AvailableForTargetsInAdGroupTypes = null;

    /**
     * Creates a new instance of RetargetingListGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @see RetargetingListTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
     * @see RetargetingListTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets IsAvailable.
     *
     * @see YesNoEnum
     */
    public function getIsAvailable(): ?string
    {
        return $this->IsAvailable ?? null;
    }

    /**
     * Sets IsAvailable.
     *
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
     * Gets Scope.
     *
     * @see RetargetingListScopeEnum
     */
    public function getScope(): ?string
    {
        return $this->Scope ?? null;
    }

    /**
     * Sets Scope.
     *
     * @see RetargetingListScopeEnum
     *
     * @return $this
     */
    public function setScope(?string $value = null)
    {
        $this->Scope = $value;

        return $this;
    }

    /**
     * Gets AvailableForTargetsInAdGroupTypes.
     */
    public function getAvailableForTargetsInAdGroupTypes(): ?AvailableForTargetsInAdGroupTypesArray
    {
        return $this->AvailableForTargetsInAdGroupTypes ?? null;
    }

    /**
     * Sets AvailableForTargetsInAdGroupTypes.
     *
     * @return $this
     */
    public function setAvailableForTargetsInAdGroupTypes(?AvailableForTargetsInAdGroupTypesArray $value = null)
    {
        $this->AvailableForTargetsInAdGroupTypes = $value;

        return $this;
    }
}
