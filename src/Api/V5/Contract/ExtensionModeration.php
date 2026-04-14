<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ExtensionModeration
{
    /** @var 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN' */
    protected $Status;

//    Can be omitted.
//    protected $StatusClarification;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setStatus(string $value)
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
