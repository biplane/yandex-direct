<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContractInfoUpdate extends ContractBaseInfo
{
//    Can be omitted.
//    protected $Price;

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
