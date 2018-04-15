<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Coverage
{

    protected $CoverageItems = null;

    /**
     * Creates a new instance of Coverage.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CoverageItems.
     *
     * @return NetworkCoverageItem[]|null
     */
    public function getCoverageItems()
    {
        return $this->CoverageItems;
    }

    /**
     * Sets CoverageItems.
     *
     * @param NetworkCoverageItem[]|null $value
     * @return self
     */
    public function setCoverageItems(array $value = null)
    {
        $this->CoverageItems = $value;

        return $this;
    }


}

