<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AutotargetingCategory
{

    protected $Category = null;

    protected $Value = null;

    /**
     * Creates a new instance of AutotargetingCategory.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Category.
     *
     * @return string
     * @see AutotargetingCategoriesEnum
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * Sets Category.
     *
     * @param string $value
     * @return $this
     * @see AutotargetingCategoriesEnum
     */
    public function setCategory($value)
    {
        $this->Category = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param string $value
     * @return $this
     * @see YesNoEnum
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

