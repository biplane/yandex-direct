<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdUpdateItem
{
    protected $CreativeId = null;

    /**
     * Creates a new instance of AdBuilderAdUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CreativeId.
     */
    public function getCreativeId(): int
    {
        return $this->CreativeId;
    }

    /**
     * Sets CreativeId.
     *
     * @return $this
     */
    public function setCreativeId(int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }
}
