<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateErrorItem extends ActionResult
{

    protected $Position = null;

    /**
     * Creates a new instance of DeduplicateErrorItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Position.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @param int $value
     * @return $this
     */
    public function setPosition($value)
    {
        $this->Position = $value;

        return $this;
    }


}

