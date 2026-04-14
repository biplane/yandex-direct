<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingCategory
{
    /** @var 'EXACT'|'ALTERNATIVE'|'COMPETITOR'|'BROADER'|'ACCESSORY' */
    protected $Category;

    /** @var 'YES'|'NO' */
    protected $Value;

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
     * Get Category
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesEnum
     *
     * @return 'EXACT'|'ALTERNATIVE'|'COMPETITOR'|'BROADER'|'ACCESSORY'
     */
    public function getCategory(): string
    {
        return $this->Category;
    }

    /**
     * Set Category
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesEnum
     *
     * @param 'EXACT'|'ALTERNATIVE'|'COMPETITOR'|'BROADER'|'ACCESSORY' $value
     *
     * @return $this
     */
    public function setCategory(string $value)
    {
        $this->Category = $value;

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
