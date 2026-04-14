<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdFeatureItem
{
    /** @var 'PRICE'|'ICON'|'CUSTOMER_RATING'|'RATINGS' */
    protected $Feature;

    /** @var 'YES'|'NO' */
    protected $Enabled;

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
     * Get Feature
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppFeatureEnum
     *
     * @return 'PRICE'|'ICON'|'CUSTOMER_RATING'|'RATINGS'
     */
    public function getFeature(): string
    {
        return $this->Feature;
    }

    /**
     * Set Feature
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppFeatureEnum
     *
     * @param 'PRICE'|'ICON'|'CUSTOMER_RATING'|'RATINGS' $value
     *
     * @return $this
     */
    public function setFeature(string $value)
    {
        $this->Feature = $value;

        return $this;
    }

    /**
     * Get Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getEnabled(): string
    {
        return $this->Enabled;
    }

    /**
     * Set Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setEnabled(string $value)
    {
        $this->Enabled = $value;

        return $this;
    }
}
