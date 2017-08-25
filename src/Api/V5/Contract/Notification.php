<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Notification
{

    protected $Email = null;

    protected $EmailSubscriptions = [];

    protected $Lang = null;

    /**
     * Creates a new instance of Notification.
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
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string $value
     * @return self
     */
    public function setEmail($value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets EmailSubscriptions.
     *
     * @return EmailSubscriptionItem[]
     */
    public function getEmailSubscriptions()
    {
        return $this->EmailSubscriptions;
    }

    /**
     * Sets EmailSubscriptions.
     *
     * @param EmailSubscriptionItem[] $value
     * @return self
     */
    public function setEmailSubscriptions(array $value)
    {
        $this->EmailSubscriptions = $value;

        return $this;
    }

    /**
     * Gets Lang.
     *
     * @return string
     * @see LangEnum
     */
    public function getLang()
    {
        return $this->Lang;
    }

    /**
     * Sets Lang.
     *
     * @param string $value
     * @return self
     * @see LangEnum
     */
    public function setLang($value)
    {
        $this->Lang = $value;

        return $this;
    }


}

