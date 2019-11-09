<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Leads.
     *
     * @return LeadGetItem[]|null
     */
    public function getLeads()
    {
        return isset($this->Leads) ? $this->Leads : null;
    }

    /**
     * Sets Leads.
     *
     * @param LeadGetItem[]|null $value
     * @return $this
     */
    public function setLeads(array $value = null)
    {
        $this->Leads = $value;

        return $this;
    }


}

