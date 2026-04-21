<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientNotification
{
    /** @var string */
    protected $Email;

    /** @var non-empty-list<EmailSubscriptionItem> */
    protected $EmailSubscriptions;

    /** @var 'RU'|'UK'|'EN'|'TR' */
    protected $Lang;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Email
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Set Email
     *
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Get EmailSubscriptions
     *
     * @return non-empty-list<EmailSubscriptionItem>
     */
    public function getEmailSubscriptions(): array
    {
        return $this->EmailSubscriptions;
    }

    /**
     * Set EmailSubscriptions
     *
     * @param non-empty-list<EmailSubscriptionItem> $value
     *
     * @return $this
     */
    public function setEmailSubscriptions(array $value)
    {
        $this->EmailSubscriptions = $value;

        return $this;
    }

    /**
     * Get Lang
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\LangEnum
     *
     * @return 'RU'|'UK'|'EN'|'TR'
     */
    public function getLang(): string
    {
        return $this->Lang;
    }

    /**
     * Set Lang
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\LangEnum
     *
     * @param 'RU'|'UK'|'EN'|'TR' $value
     *
     * @return $this
     */
    public function setLang(string $value)
    {
        $this->Lang = $value;

        return $this;
    }
}
