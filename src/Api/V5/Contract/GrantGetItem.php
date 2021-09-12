<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GrantGetItem extends GrantItem
{
//    Can be omitted.
//    protected $Agency = null;

    public function getAgency(): ?string
    {
        return $this->Agency ?? null;
    }

    /**
     * @return $this
     */
    public function setAgency(?string $value = null)
    {
        $this->Agency = $value;

        return $this;
    }
}
