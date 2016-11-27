<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetRetargetingGoalsRequest
{

    protected $Logins = null;

    /**
     * Creates a new instance of GetRetargetingGoalsRequest.
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
        return $this->Logins;
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


}

