<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponseAddItem
{
    protected $Keyword = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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
