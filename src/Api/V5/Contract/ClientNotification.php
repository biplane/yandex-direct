<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientNotification
{
    protected $Email = null;

    protected $EmailSubscriptions = [];

    protected $Lang = null;

    /**
     * Creates a new instance of ClientNotification.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Email.
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets EmailSubscriptions.
     *
     * @return EmailSubscriptionItem[]
     */
    public function getEmailSubscriptions(): array
    {
        return $this->EmailSubscriptions;
    }

    /**
     * Sets EmailSubscriptions.
     *
     * @param EmailSubscriptionItem[] $value
     *
     * @return $this
     */
    public function setEmailSubscriptions(array $value)
    {
        $this->EmailSubscriptions = $value;

        return $this;
    }

    /**
     * Gets Lang.
     *
     * @see LangEnum
     */
    public function getLang(): string
    {
        return $this->Lang;
    }

    /**
     * Sets Lang.
     *
     * @see LangEnum
     *
     * @return $this
     */
    public function setLang(string $value)
    {
        $this->Lang = $value;

        return $this;
    }
}
