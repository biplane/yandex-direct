<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedAdGroupAdd
{
    protected $OfferRetargeting = null;

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
    public function getOfferRetargeting(): string
    {
        return $this->OfferRetargeting;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setOfferRetargeting(string $value)
    {
        $this->OfferRetargeting = $value;

        return $this;
    }
}
