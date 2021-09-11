<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSetAddItem
{
    protected $Name = null;

    protected $NegativeKeywords = [];

    /**
     * Creates a new instance of NegativeKeywordSharedSetAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]
     */
    public function getNegativeKeywords(): array
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setNegativeKeywords(array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }
}
