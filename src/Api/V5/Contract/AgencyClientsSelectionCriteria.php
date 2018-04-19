<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AgencyClientsSelectionCriteria
{

//    Can be omit.
//    protected $Logins = null;

//    Can be omit.
//    protected $Archived = null;

    /**
     * Creates a new instance of AgencyClientsSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return isset($this->Logins) ? $this->Logins : null;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets Archived.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getArchived()
    {
        return isset($this->Archived) ? $this->Archived : null;
    }

    /**
     * Sets Archived.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setArchived($value = null)
    {
        $this->Archived = $value;

        return $this;
    }


}

