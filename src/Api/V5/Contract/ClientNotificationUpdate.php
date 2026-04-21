<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientNotificationUpdate
{
//    Can be omitted.
//    protected $Email;

//    Can be omitted.
//    protected $EmailSubscriptions;

//    Can be omitted.
//    protected $Lang;

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
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email
     *
     * @return $this
     */
    public function setEmail(?string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Get EmailSubscriptions
     *
     * @return list<EmailSubscriptionItem>
     */
    public function getEmailSubscriptions(): array
    {
        return $this->EmailSubscriptions ?? [];
    }

    /**
     * Set EmailSubscriptions
     *
     * @param list<EmailSubscriptionItem> $value
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
     * @return 'RU'|'UK'|'EN'|'TR'|null
     */
    public function getLang(): ?string
    {
        return $this->Lang ?? null;
    }

    /**
     * Set Lang
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\LangEnum
     *
     * @param 'RU'|'UK'|'EN'|'TR'|null $value
     *
     * @return $this
     */
    public function setLang(?string $value)
    {
        $this->Lang = $value;

        return $this;
    }
}
