<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtensionBase
{
//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $Callout;

//    Can be omitted.
//    protected $State;

//    Can be omitted.
//    protected $Status;

//    Can be omitted.
//    protected $StatusClarification;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum
     *
     * @return 'CALLOUT'|'UNKNOWN'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum
     *
     * @param 'CALLOUT'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Callout
     */
    public function getCallout(): ?Callout
    {
        return $this->Callout ?? null;
    }

    /**
     * Set Callout
     *
     * @return $this
     */
    public function setCallout(?Callout $value)
    {
        $this->Callout = $value;

        return $this;
    }

    /**
     * Get State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @return 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Set State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @param 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setState(?string $value)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get StatusClarification
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Set StatusClarification
     *
     * @return $this
     */
    public function setStatusClarification(?string $value)
    {
        $this->StatusClarification = $value;

        return $this;
    }
}
