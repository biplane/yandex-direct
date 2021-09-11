<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetResponseGeneral
{
//    Can be omit.
//    protected $LimitedBy = null;

    /**
     * Creates a new instance of GetResponseGeneral.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets LimitedBy.
     */
    public function getLimitedBy(): ?int
    {
        return $this->LimitedBy ?? null;
    }

    /**
     * Sets LimitedBy.
     *
     * @return $this
     */
    public function setLimitedBy(?int $value = null)
    {
        $this->LimitedBy = $value;

        return $this;
    }
}
