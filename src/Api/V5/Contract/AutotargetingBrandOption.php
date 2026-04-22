<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingBrandOption
{
    /** @var 'WITHOUT_BRANDS'|'WITH_ADVERTISER_BRAND' */
    protected $Option;

    /** @var 'YES'|'NO' */
    protected $Value;

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
     * Get Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsEnum
     *
     * @return 'WITHOUT_BRANDS'|'WITH_ADVERTISER_BRAND'
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * Set Option
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsEnum
     *
     * @param 'WITHOUT_BRANDS'|'WITH_ADVERTISER_BRAND' $value
     *
     * @return $this
     */
    public function setOption(string $value)
    {
        $this->Option = $value;

        return $this;
    }

    /**
     * Get Value
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Set Value
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
