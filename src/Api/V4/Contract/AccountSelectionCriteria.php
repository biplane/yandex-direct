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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
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
     * @return int[]|null
     */
    public function getAccountIDS(): ?array
    {
        return $this->AccountIDS;
    }

    /**
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
