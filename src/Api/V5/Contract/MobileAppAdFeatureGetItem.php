<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

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
    public static function create()
    {
        return new static();
    }

    /**
     * Get IsAvailable
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum
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
