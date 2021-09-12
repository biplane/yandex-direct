<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetLeadsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Leads = null;

    /**
     * @return LeadGetItem[]|null
     */
    public function getLeads(): ?array
    {
        return $this->Leads ?? null;
    }

    /**
     * @param LeadGetItem[]|null $value
     *
     * @return $this
     */
    public function setLeads(?array $value = null)
    {
        $this->Leads = $value;

        return $this;
    }
}
