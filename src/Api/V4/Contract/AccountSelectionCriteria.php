<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AccountSelectionCriteria
{
//    Can be omitted.
//    protected $Logins;

//    Can be omitted.
//    protected $AccountIDS;

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
     * Get Logins
     *
     * @return list<string>|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
     * Set Logins
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Get AccountIDS
     *
     * @return list<int>|null
     */
    public function getAccountIDS(): ?array
    {
        return $this->AccountIDS ?? null;
    }

    /**
     * Set AccountIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setAccountIDS(?array $value)
    {
        $this->AccountIDS = $value;

        return $this;
    }
}
