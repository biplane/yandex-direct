<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddPassportOrganizationResponse extends ActionResultBase
{
//    Can be omitted.
//    protected $Login;

//    Can be omitted.
//    protected $ClientId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(?string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get ClientId
     */
    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * Set ClientId
     *
     * @return $this
     */
    public function setClientId(?int $value)
    {
        $this->ClientId = $value;

        return $this;
    }
}
