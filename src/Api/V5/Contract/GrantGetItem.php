<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GrantGetItem extends GrantItem
{
//    Can be omitted.
//    protected $Agency;

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
     * Get Agency
     */
    public function getAgency(): ?string
    {
        return $this->Agency ?? null;
    }

    /**
     * Set Agency
     *
     * @return $this
     */
    public function setAgency(?string $value)
    {
        $this->Agency = $value;

        return $this;
    }
}
