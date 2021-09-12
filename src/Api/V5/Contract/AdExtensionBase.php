<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionBase
{
//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $Callout = null;

//    Can be omitted.
//    protected $State = null;

//    Can be omitted.
//    protected $Status = null;

//    Can be omitted.
//    protected $StatusClarification = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see AdExtensionTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see AdExtensionTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    public function getCallout(): ?Callout
    {
        return $this->Callout ?? null;
    }

    /**
     * @return $this
     */
    public function setCallout(?Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }

    /**
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
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
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }
}
