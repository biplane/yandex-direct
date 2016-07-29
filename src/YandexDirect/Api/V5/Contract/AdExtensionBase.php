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
     * @return AdExtensionBase
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return AdExtensionTypeEnum|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param AdExtensionTypeEnum|null $value
     * @return $this
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
     * @return $this
     */
    public function setCallout(Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return StateEnum|null
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param StateEnum|null $value
     * @return $this
     */
    public function setState($value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return StatusEnum|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param StatusEnum|null $value
     * @return $this
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
     * @return $this
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }


}

