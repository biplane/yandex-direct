<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NotificationUpdate
{
//    Can be omitted.
//    protected $Email = null;

//    Can be omitted.
//    protected $EmailSubscriptions = null;

//    Can be omitted.
//    protected $Lang = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * @return EmailSubscriptionItem[]|null
     */
    public function getEmailSubscriptions(): ?array
    {
        return $this->EmailSubscriptions ?? null;
    }

    /**
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
     * @see LangEnum
     */
    public function getLang(): ?string
    {
        return $this->Lang ?? null;
    }

    /**
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
