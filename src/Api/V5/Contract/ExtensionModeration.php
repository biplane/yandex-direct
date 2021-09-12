<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ExtensionModeration
{
    protected $Status = null;

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
     * @see StatusEnum
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(string $value)
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
