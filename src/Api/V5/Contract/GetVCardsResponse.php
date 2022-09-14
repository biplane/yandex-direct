<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetVCardsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $VCards = null;

    /**
     * @return VCardGetItem[]|null
     */
    public function getVCards(): ?array
    {
        return $this->VCards ?? null;
    }

    /**
     * @param VCardGetItem[]|null $value
     *
     * @return $this
     */
    public function setVCards(?array $value = null)
    {
        $this->VCards = $value;

        return $this;
    }
}
