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
//    protected $Organization = null;

//    Can be omitted.
//    protected $Contract = null;

//    Can be omitted.
//    protected $Contragent = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getOrganization(): ?OrgInfo
    {
        return $this->Organization ?? null;
    }

    /**
     * @return $this
     */
    public function setOrganization(?OrgInfo $value = null)
    {
        $this->Organization = $value;

        return $this;
    }

    public function getContract(): ?ContractInfoGet
    {
        return $this->Contract ?? null;
    }

    /**
     * @return $this
     */
    public function setContract(?ContractInfoGet $value = null)
    {
        $this->Contract = $value;

        return $this;
    }

    public function getContragent(): ?ContragentInfoGet
    {
        return $this->Contragent ?? null;
    }

    /**
     * @return $this
     */
    public function setContragent(?ContragentInfoGet $value = null)
    {
        $this->Contragent = $value;

        return $this;
    }
}
