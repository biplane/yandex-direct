<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionBase
{
//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Callout = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $StatusClarification = null;

    /**
     * Creates a new instance of AdExtensionBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @see AdExtensionTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
     * @see AdExtensionTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Callout.
     */
    public function getCallout(): ?Callout
    {
        return $this->Callout ?? null;
    }

    /**
     * Sets Callout.
     *
     * @return $this
     */
    public function setCallout(?Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Sets State.
     *
     * @see StateEnum
     *
     * @return $this
     */
    public function setState(?string $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Sets Status.
     *
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Sets StatusClarification.
     *
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }
}
