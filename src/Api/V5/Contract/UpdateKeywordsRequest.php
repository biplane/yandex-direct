<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateKeywordsRequest
{
    protected $Keywords = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return KeywordUpdateItem[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * @param KeywordUpdateItem[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
