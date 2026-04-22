<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdBuilderAdUpdateItem
{
    /** @var int */
    protected $CreativeId;

//    Can be omitted.
//    protected $ErirAdDescription;

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
     * Get CreativeId
     */
    public function getCreativeId(): int
    {
        return $this->CreativeId;
    }

    /**
     * Set CreativeId
     *
     * @return $this
     */
    public function setCreativeId(int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }

    /**
     * Get ErirAdDescription
     */
    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * Set ErirAdDescription
     *
     * @return $this
     */
    public function setErirAdDescription(?string $value)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
