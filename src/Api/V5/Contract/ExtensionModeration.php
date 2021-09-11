<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Status.
     *
     * @see StatusEnum
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(string $value)
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
