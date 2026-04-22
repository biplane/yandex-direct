<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContractInfoGet extends ContractBaseInfo
{
//    Can be omitted.
//    protected $Price;

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
     * Get Price
     */
    public function getPrice(): ?ContractPrice
    {
        return $this->Price ?? null;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(?ContractPrice $value)
    {
        $this->Price = $value;

        return $this;
    }
}
