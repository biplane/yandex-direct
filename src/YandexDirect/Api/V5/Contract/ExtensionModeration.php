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
     * @return self
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
        return $this->StatusClarification;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }


}

