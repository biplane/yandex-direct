<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SupplySidePlatformsItem
{

    protected $Title = null;

    /**
     * Creates a new instance of SupplySidePlatformsItem.
     *
     * @return SupplySidePlatformsItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @param string $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->Title = $value;

        return $this;
    }


}

