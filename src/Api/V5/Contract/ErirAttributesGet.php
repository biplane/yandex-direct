<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ErirAttributesGet
{
//    Can be omitted.
//    protected $Organization;

//    Can be omitted.
//    protected $Contract;

//    Can be omitted.
//    protected $Contragent;

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
     * Get Organization
     */
    public function getOrganization(): ?OrgInfo
    {
        return $this->Organization ?? null;
    }

    /**
     * Set Organization
     *
     * @return $this
     */
    public function setOrganization(?OrgInfo $value)
    {
        $this->Organization = $value;

        return $this;
    }

    /**
     * Get Contract
     */
    public function getContract(): ?ContractInfoGet
    {
        return $this->Contract ?? null;
    }

    /**
     * Set Contract
     *
     * @return $this
     */
    public function setContract(?ContractInfoGet $value)
    {
        $this->Contract = $value;

        return $this;
    }

    /**
     * Get Contragent
     */
    public function getContragent(): ?ContragentInfoGet
    {
        return $this->Contragent ?? null;
    }

    /**
     * Set Contragent
     *
     * @return $this
     */
    public function setContragent(?ContragentInfoGet $value)
    {
        $this->Contragent = $value;

        return $this;
    }
}
