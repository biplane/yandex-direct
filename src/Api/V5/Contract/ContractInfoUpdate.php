<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ContractInfoUpdate extends ContractBaseInfo
{
//    Can be omitted.
//    protected $Price = null;

    public function getPrice(): ?ContractPrice
    {
        return $this->Price ?? null;
    }

    /**
     * @return $this
     */
    public function setPrice(?ContractPrice $value = null)
    {
        $this->Price = $value;

        return $this;
    }
}
