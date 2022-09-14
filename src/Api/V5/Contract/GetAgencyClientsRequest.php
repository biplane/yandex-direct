<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetAgencyClientsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omitted.
//    protected $TinInfoFieldNames = null;

//    Can be omitted.
//    protected $OrganizationFieldNames = null;

//    Can be omitted.
//    protected $ContractFieldNames = null;

//    Can be omitted.
//    protected $ContragentFieldNames = null;

//    Can be omitted.
//    protected $ContragentTinInfoFieldNames = null;

    public function getSelectionCriteria(): AgencyClientsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(AgencyClientsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see AgencyClientFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see AgencyClientFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * @see TinInfoFieldEnum
     *
     * @return string[]|null
     */
    public function getTinInfoFieldNames(): ?array
    {
        return $this->TinInfoFieldNames ?? null;
    }

    /**
     * @see TinInfoFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTinInfoFieldNames(?array $value = null)
    {
        $this->TinInfoFieldNames = $value;

        return $this;
    }

    /**
     * @see OrgInfoFieldEnum
     *
     * @return string[]|null
     */
    public function getOrganizationFieldNames(): ?array
    {
        return $this->OrganizationFieldNames ?? null;
    }

    /**
     * @see OrgInfoFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setOrganizationFieldNames(?array $value = null)
    {
        $this->OrganizationFieldNames = $value;

        return $this;
    }

    /**
     * @see ContractInfoFieldEnum
     *
     * @return string[]|null
     */
    public function getContractFieldNames(): ?array
    {
        return $this->ContractFieldNames ?? null;
    }

    /**
     * @see ContractInfoFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setContractFieldNames(?array $value = null)
    {
        $this->ContractFieldNames = $value;

        return $this;
    }

    /**
     * @see ContragentInfoFieldEnum
     *
     * @return string[]|null
     */
    public function getContragentFieldNames(): ?array
    {
        return $this->ContragentFieldNames ?? null;
    }

    /**
     * @see ContragentInfoFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setContragentFieldNames(?array $value = null)
    {
        $this->ContragentFieldNames = $value;

        return $this;
    }

    /**
     * @see TinInfoFieldEnum
     *
     * @return string[]|null
     */
    public function getContragentTinInfoFieldNames(): ?array
    {
        return $this->ContragentTinInfoFieldNames ?? null;
    }

    /**
     * @see TinInfoFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setContragentTinInfoFieldNames(?array $value = null)
    {
        $this->ContragentTinInfoFieldNames = $value;

        return $this;
    }
}
