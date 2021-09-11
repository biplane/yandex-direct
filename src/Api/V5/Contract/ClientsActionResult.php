<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientsActionResult extends ActionResultBase
{
//    Can be omit.
//    protected $ClientId = null;

    /**
     * Creates a new instance of ClientsActionResult.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ClientId.
     */
    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * Sets ClientId.
     *
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }
}
