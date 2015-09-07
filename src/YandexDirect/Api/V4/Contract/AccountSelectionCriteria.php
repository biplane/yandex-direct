<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AccountSelectionCriteria
{

    protected $Logins = null;

    protected $AccountIDS = null;

    /**
     * Creates a new instance of AccountSelectionCriteria.
     *
     * @return AccountSelectionCriteria
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
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param array|null $value
     * @return $this
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets AccountIDS.
     *
     * @return int[]|null
     */
    public function getAccountIDS()
    {
        return $this->AccountIDS;
    }

    /**
     * Sets AccountIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAccountIDS(array $value = null)
    {
        $this->AccountIDS = $value;

        return $this;
    }


}

