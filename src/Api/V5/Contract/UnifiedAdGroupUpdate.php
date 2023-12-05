<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedAdGroupUpdate
{
//    Can be omitted.
//    protected $OfferRetargeting = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see YesNoEnum
     */
    public function getOfferRetargeting(): ?string
    {
        return $this->OfferRetargeting ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setOfferRetargeting(?string $value = null)
    {
        $this->OfferRetargeting = $value;

        return $this;
    }
}
