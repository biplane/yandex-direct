<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AutotargetingCategory
{
    protected $Category = null;

    protected $Value = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see AutotargetingCategoriesEnum
     */
    public function getCategory(): string
    {
        return $this->Category;
    }

    /**
     * @see AutotargetingCategoriesEnum
     *
     * @return $this
     */
    public function setCategory(string $value)
    {
        $this->Category = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
