<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GrantGetItem extends GrantItem
{
//    Can be omit.
//    protected $Agency = null;

    /**
     * Creates a new instance of GrantGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Agency.
     */
    public function getAgency(): ?string
    {
        return $this->Agency ?? null;
    }

    /**
     * Sets Agency.
     *
     * @return $this
     */
    public function setAgency(?string $value = null)
    {
        $this->Agency = $value;

        return $this;
    }
}
