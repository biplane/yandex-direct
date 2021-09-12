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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * @return EmailSubscriptionItem[]
     */
    public function getEmailSubscriptions(): array
    {
        return $this->EmailSubscriptions;
    }

    /**
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
     * @see LangEnum
     */
    public function getLang(): string
    {
        return $this->Lang;
    }

    /**
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
