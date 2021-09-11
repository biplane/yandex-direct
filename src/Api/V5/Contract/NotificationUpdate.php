<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Email.
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets EmailSubscriptions.
     *
     * @return EmailSubscriptionItem[]|null
     */
    public function getEmailSubscriptions(): ?array
    {
        return $this->EmailSubscriptions ?? null;
    }

    /**
     * Sets EmailSubscriptions.
     *
     * @param EmailSubscriptionItem[]|null $value
     *
     * @return $this
     */
    public function setEmailSubscriptions(?array $value = null)
    {
        $this->EmailSubscriptions = $value;

        return $this;
    }

    /**
     * Gets Lang.
     *
     * @see LangEnum
     */
    public function getLang(): ?string
    {
        return $this->Lang ?? null;
    }

    /**
     * Sets Lang.
     *
     * @see LangEnum
     *
     * @return $this
     */
    public function setLang(?string $value = null)
    {
        $this->Lang = $value;

        return $this;
    }
}
