<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Ads;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdFeatureGetItem extends MobileAppAdFeatureItem
{
    /** @var 'YES'|'NO'|'UNKNOWN' */
    protected $IsAvailable;

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
     * Get IsAvailable
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoUnknownEnum
     *
     * @return 'YES'|'NO'|'UNKNOWN'
     */
    public function getIsAvailable(): string
    {
        return $this->IsAvailable;
    }

    /**
     * Set IsAvailable
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoUnknownEnum
     *
     * @param 'YES'|'NO'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setIsAvailable(string $value)
    {
        $this->IsAvailable = $value;

        return $this;
    }
}
