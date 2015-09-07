<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ContextCoverage
{

    protected $Items = null;

    /**
     * Creates a new instance of ContextCoverage.
     *
     * @return ContextCoverage
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return ContextCoverageItem[]|null
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Sets Items.
     *
     * @param ContextCoverageItem[]|null $value
     * @return $this
     */
    public function setItems(array $value = null)
    {
        $this->Items = $value;

        return $this;
    }


}

