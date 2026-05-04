<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdGroups;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedAdGroupAdd
{
    /** @var 'YES'|'NO' */
    protected $OfferRetargeting;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get OfferRetargeting
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getOfferRetargeting(): string
    {
        return $this->OfferRetargeting;
    }

    /**
     * Set OfferRetargeting
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setOfferRetargeting(string $value)
    {
        $this->OfferRetargeting = $value;

        return $this;
    }
}
