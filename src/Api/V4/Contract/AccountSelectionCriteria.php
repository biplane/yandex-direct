<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets AccountIDS.
     *
     * @return int[]|null
     */
    public function getAccountIDS(): ?array
    {
        return $this->AccountIDS;
    }

    /**
     * Sets AccountIDS.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAccountIDS(?array $value = null)
    {
        $this->AccountIDS = $value;

        return $this;
    }
}
