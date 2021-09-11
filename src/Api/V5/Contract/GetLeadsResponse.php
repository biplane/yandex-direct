<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetLeadsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Leads = null;

    /**
     * Creates a new instance of GetLeadsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Leads.
     *
     * @return LeadGetItem[]|null
     */
    public function getLeads(): ?array
    {
        return $this->Leads ?? null;
    }

    /**
     * Sets Leads.
     *
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
