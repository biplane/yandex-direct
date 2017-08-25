<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NotificationUpdate
{

    protected $Email = null;

    protected $EmailSubscriptions = null;

    protected $Lang = null;

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
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string|null $value
     * @return self
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
        return $this->EmailSubscriptions;
    }

    /**
     * Sets EmailSubscriptions.
     *
     * @param EmailSubscriptionItem[]|null $value
     * @return self
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
        return $this->Lang;
    }

    /**
     * Sets Lang.
     *
     * @param string|null $value
     * @return self
     * @see LangEnum
     */
    public function setLang($value = null)
    {
        $this->Lang = $value;

        return $this;
    }


}

