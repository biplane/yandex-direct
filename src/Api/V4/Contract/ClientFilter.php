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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getStatusArch(): ?string
    {
        return $this->StatusArch;
    }

    /**
     * @return $this
     */
    public function setStatusArch(?string $value = null)
    {
        $this->StatusArch = $value;

        return $this;
    }
}
