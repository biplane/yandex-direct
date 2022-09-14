<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeduplicateResponseUpdateItem
{
    protected $Id = null;

    protected $Keyword = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

        return $this;
    }
}
