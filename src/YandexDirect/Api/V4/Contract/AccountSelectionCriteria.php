<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AccountSelectionCriteria
{
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var int[]
     */
    protected $AccountIDS;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return AccountSelectionCriteria
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the AccountIDS.
     *
     * @return int[]
     */
    public function getAccountIDS()
    {
        return $this->AccountIDS;
    }

    /**
     * Sets the AccountIDS.
     *
     * @param int[] $AccountIDS
     *
     * @return AccountSelectionCriteria
     */
    public function setAccountIDS(array $AccountIDS)
    {
        $this->AccountIDS = $AccountIDS;

        return $this;
    }
}