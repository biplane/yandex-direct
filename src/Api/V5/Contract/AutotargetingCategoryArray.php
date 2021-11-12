<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AutotargetingCategoryArray
{

    protected $Items = [];

    /**
     * Creates a new instance of AutotargetingCategoryArray.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return AutotargetingCategory[]
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param AutotargetingCategory[] $value
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }


}

