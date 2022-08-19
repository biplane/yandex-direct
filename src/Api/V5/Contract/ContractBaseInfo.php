<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ContractBaseInfo
{
//    Can be omitted.
//    protected $Number = null;

//    Can be omitted.
//    protected $Date = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $ActionType = null;

//    Can be omitted.
//    protected $SubjectType = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getNumber(): ?string
    {
        return $this->Number ?? null;
    }

    /**
     * @return $this
     */
    public function setNumber(?string $value = null)
    {
        $this->Number = $value;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->Date ?? null;
    }

    /**
     * @return $this
     */
    public function setDate(?string $value = null)
    {
        $this->Date = $value;

        return $this;
    }

    /**
     * @see ContractTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see ContractTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see ContractActionTypeEnum
     */
    public function getActionType(): ?string
    {
        return $this->ActionType ?? null;
    }

    /**
     * @see ContractActionTypeEnum
     *
     * @return $this
     */
    public function setActionType(?string $value = null)
    {
        $this->ActionType = $value;

        return $this;
    }

    /**
     * @see ContractSubjectTypeEnum
     */
    public function getSubjectType(): ?string
    {
        return $this->SubjectType ?? null;
    }

    /**
     * @see ContractSubjectTypeEnum
     *
     * @return $this
     */
    public function setSubjectType(?string $value = null)
    {
        $this->SubjectType = $value;

        return $this;
    }
}
