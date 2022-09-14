<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddKeywordsRequest
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
     * @return KeywordAddItem[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * @param KeywordAddItem[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
