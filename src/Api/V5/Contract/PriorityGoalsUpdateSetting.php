<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PriorityGoalsUpdateSetting
{

    protected $Items = [];

    /**
     * Creates a new instance of PriorityGoalsUpdateSetting.
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
     * @return PriorityGoalsUpdateItem[]
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param PriorityGoalsUpdateItem[] $value
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }


}

