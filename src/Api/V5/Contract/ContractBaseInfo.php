<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContractBaseInfo
{
//    Can be omitted.
//    protected $Number;

//    Can be omitted.
//    protected $Date;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $ActionType;

//    Can be omitted.
//    protected $SubjectType;

//    Can be omitted.
//    protected $IsAgencyPayment;

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
     * Get Number
     */
    public function getNumber(): ?string
    {
        return $this->Number ?? null;
    }

    /**
     * Set Number
     *
     * @return $this
     */
    public function setNumber(?string $value)
    {
        $this->Number = $value;

        return $this;
    }

    /**
     * Get Date
     */
    public function getDate(): ?string
    {
        return $this->Date ?? null;
    }

    /**
     * Set Date
     *
     * @return $this
     */
    public function setDate(?string $value)
    {
        $this->Date = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractTypeEnum
     *
     * @return 'CONTRACT'|'INTERMEDIARY_CONTRACT'|'ADDITIONAL_AGREEMENT'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractTypeEnum
     *
     * @param 'CONTRACT'|'INTERMEDIARY_CONTRACT'|'ADDITIONAL_AGREEMENT'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get ActionType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractActionTypeEnum
     *
     * @return 'COMMERCIAL'|'DISTRIBUTION'|'CONCLUDE'|'OTHER'|null
     */
    public function getActionType(): ?string
    {
        return $this->ActionType ?? null;
    }

    /**
     * Set ActionType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractActionTypeEnum
     *
     * @param 'COMMERCIAL'|'DISTRIBUTION'|'CONCLUDE'|'OTHER'|null $value
     *
     * @return $this
     */
    public function setActionType(?string $value)
    {
        $this->ActionType = $value;

        return $this;
    }

    /**
     * Get SubjectType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractSubjectTypeEnum
     *
     * @return 'REPRESENTATION'|'MEDIATION'|'DISTRIBUTION'|'ORG_DISTRIBUTION'|'OTHER'|null
     */
    public function getSubjectType(): ?string
    {
        return $this->SubjectType ?? null;
    }

    /**
     * Set SubjectType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ContractSubjectTypeEnum
     *
     * @param 'REPRESENTATION'|'MEDIATION'|'DISTRIBUTION'|'ORG_DISTRIBUTION'|'OTHER'|null $value
     *
     * @return $this
     */
    public function setSubjectType(?string $value)
    {
        $this->SubjectType = $value;

        return $this;
    }

    /**
     * Get IsAgencyPayment
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getIsAgencyPayment(): ?string
    {
        return $this->IsAgencyPayment ?? null;
    }

    /**
     * Set IsAgencyPayment
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setIsAgencyPayment(?string $value)
    {
        $this->IsAgencyPayment = $value;

        return $this;
    }
}
