<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NotificationUpdate
{

//    Can be omit.
//    protected $Email = null;

//    Can be omit.
//    protected $EmailSubscriptions = null;

//    Can be omit.
//    protected $Lang = null;

    /**
     * Creates a new instance of NotificationUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->Email) ? $this->Email : null;
    }

    /**
     * Sets Email.
     *
     * @param string|null $value
     * @return $this
     */
    public function setEmail($value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets EmailSubscriptions.
     *
     * @return EmailSubscriptionItem[]|null
     */
    public function getEmailSubscriptions()
    {
        return isset($this->EmailSubscriptions) ? $this->EmailSubscriptions : null;
    }

    /**
     * Sets EmailSubscriptions.
     *
     * @param EmailSubscriptionItem[]|null $value
     * @return $this
     */
    public function setEmailSubscriptions(array $value = null)
    {
        $this->EmailSubscriptions = $value;

        return $this;
    }

    /**
     * Gets Lang.
     *
     * @return string|null
     * @see LangEnum
     */
    public function getLang()
    {
        return isset($this->Lang) ? $this->Lang : null;
    }

    /**
     * Sets Lang.
     *
     * @param string|null $value
     * @return $this
     * @see LangEnum
     */
    public function setLang($value = null)
    {
        $this->Lang = $value;

        return $this;
    }


}

