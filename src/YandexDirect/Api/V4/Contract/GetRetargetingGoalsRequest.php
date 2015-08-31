<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetRetargetingGoalsRequest
{
    /**
     * @var string[]
     */
    protected $Logins;

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
     * @return GetRetargetingGoalsRequest
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }
}