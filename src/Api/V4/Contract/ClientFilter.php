<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientFilter
{
    protected $StatusArch = null;

    /**
     * Creates a new instance of ClientFilter.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets StatusArch.
     */
    public function getStatusArch(): ?string
    {
        return $this->StatusArch;
    }

    /**
     * Sets StatusArch.
     *
     * @return $this
     */
    public function setStatusArch(?string $value = null)
    {
        $this->StatusArch = $value;

        return $this;
    }
}
