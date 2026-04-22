<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetResponseGeneral
{
//    Can be omitted.
//    protected $LimitedBy;

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
     * Get LimitedBy
     */
    public function getLimitedBy(): ?int
    {
        return $this->LimitedBy ?? null;
    }

    /**
     * Set LimitedBy
     *
     * @return $this
     */
    public function setLimitedBy(?int $value)
    {
        $this->LimitedBy = $value;

        return $this;
    }
}
