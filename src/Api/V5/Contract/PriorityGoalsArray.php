<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriorityGoalsArray
{

    protected $Items = [];

    /**
     * Creates a new instance of PriorityGoalsArray.
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
     * @return PriorityGoalsItem[]
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param PriorityGoalsItem[] $value
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }


}

