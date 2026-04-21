<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedAdGroupGet
{
//    Can be omitted.
//    protected $OfferRetargeting;

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
     * Get OfferRetargeting
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getOfferRetargeting(): ?string
    {
        return $this->OfferRetargeting ?? null;
    }

    /**
     * Set OfferRetargeting
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setOfferRetargeting(?string $value)
    {
        $this->OfferRetargeting = $value;

        return $this;
    }
}
