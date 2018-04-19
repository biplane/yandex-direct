<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ExtensionModeration
{

    protected $Status = null;

//    Can be omit.
//    protected $StatusClarification = null;

    /**
     * Creates a new instance of ExtensionModeration.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Status.
     *
     * @return string
     * @see StatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string $value
     * @return $this
     * @see StatusEnum
     */
    public function setStatus($value)
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
        return isset($this->StatusClarification) ? $this->StatusClarification : null;
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

