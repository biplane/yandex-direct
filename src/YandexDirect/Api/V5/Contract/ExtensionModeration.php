<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ExtensionModeration
{

    protected $Status = null;

    protected $StatusClarification = null;

    /**
     * Creates a new instance of ExtensionModeration.
     *
     * @return ExtensionModeration
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Status.
     *
     * @return StatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param StatusEnum $value
     * @return $this
     */
    public function setStatus(StatusEnum $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     *
     * @return string|null
     */
    public function getStatusClarification()
    {
        return $this->StatusClarification;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }


}

