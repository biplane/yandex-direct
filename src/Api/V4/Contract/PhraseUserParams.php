<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PhraseUserParams
{
    /** @var string|null */
    protected $Param1 = null;

    /** @var string|null */
    protected $Param2 = null;

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
     * Get Param1
     */
    public function getParam1(): ?string
    {
        return $this->Param1;
    }

    /**
     * Set Param1
     *
     * @return $this
     */
    public function setParam1(?string $value)
    {
        $this->Param1 = $value;

        return $this;
    }

    /**
     * Get Param2
     */
    public function getParam2(): ?string
    {
        return $this->Param2;
    }

    /**
     * Set Param2
     *
     * @return $this
     */
    public function setParam2(?string $value)
    {
        $this->Param2 = $value;

        return $this;
    }
}
