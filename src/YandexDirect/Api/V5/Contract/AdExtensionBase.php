<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionBase
{

    protected $Type = null;

    protected $Callout = null;

    protected $State = null;

    protected $Status = null;

    protected $StatusClarification = null;

    /**
     * Creates a new instance of AdExtensionBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see AdExtensionTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
     * @see AdExtensionTypeEnum
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Callout.
     *
     * @return Callout|null
     */
    public function getCallout()
    {
        return $this->Callout;
    }

    /**
     * Sets Callout.
     *
     * @param Callout|null $value
     * @return self
     */
    public function setCallout(Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return string|null
     * @see StateEnum
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return self
     * @see StateEnum
     */
    public function setState($value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
     * @see StatusEnum
     */
    public function setStatus($value = null)
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

