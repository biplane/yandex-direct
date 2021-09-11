<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Keywords = null;

    /**
     * Creates a new instance of GetKeywordsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keywords.
     *
     * @return KeywordGetItem[]|null
     */
    public function getKeywords(): ?array
    {
        return $this->Keywords ?? null;
    }

    /**
     * Sets Keywords.
     *
     * @param KeywordGetItem[]|null $value
     *
     * @return $this
     */
    public function setKeywords(?array $value = null)
    {
        $this->Keywords = $value;

        return $this;
    }
}
